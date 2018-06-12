<?php
/**
 * Smarty Internal Plugin
 *
 * @package Smarty
 * @subpackage Cacher
 */

/**
 * Cache Handler API
 *
 * @package Smarty
 * @subpackage Cacher
 * @author Rodney Rehm
 */
abstract class Smarty_CacheResource_Custom extends Smarty_CacheResource {

    /**
     * fetch cached content and its modification time from data source
     *
     * @param string $id         unique cache content identifier
     * @param string $name       template name
     * @param string $cache_id   cache id
     * @param string $compile_id compile id
     * @param string $content    cached content
     * @param integer $mtime cache modification timestamp (epoch)
     * @return void
     */
    protected abstract function fetch($id, $name, $cache_id, $compile_id, &$content, &$mtime);

    /**
     * Fetch cached content's modification timestamp from data source
     *
     * {@internal implementing this method is optional.
     *  Only implement it if modification times can be accessed faster than loading the complete cached content.}}
     *
     * @param string $id         unique cache content identifier
     * @param string $name       template name
     * @param string $cache_id   cache id
     * @param string $compile_id compile id
     * @return integer|boolean timestamp (epoch) the template was modified, or false if not found
     */
    protected function fetchTimestamp($id, $name, $cache_id, $compile_id)
    {
        return null;
    }

    /**
     * Save content to cache
     *
     * @param string       $id         unique cache content identifier
     * @param string       $name       template name
     * @param string       $cache_id   cache id
     * @param string       $compile_id compile id
     * @param integer|null $exp_time   seconds till expiration or null
     * @param string $content content to cache
     * @return boolean success
     */
    protected abstract function save($id, $name, $cache_id, $compile_id, $exp_time, $content);

    /**
     * Delete content from cache
     *
     * @param string       $name       template name
     * @param string       $cache_id   cache id
     * @param string       $compile_id compile id
     * @param integer|null $exp_time   seconds till expiration time in seconds or null
     * @return integer number of deleted caches
     */
    protected abstract function delete($name, $cache_id, $compile_id, $exp_time);

    /**
     * populate Cached Object with meta data from Resource
     *
     * @param Smarty_Template_Cached   $cached    cached object
     * @param Smarty_Internal_Template $_template template object
     * @return void
     */
    public function populate(Smarty_Template_Cached $cached, Smarty_Internal_Template $_template)
    {
        $_cache_id = isset($cached->cache_id) ? preg_replace('![^\w\|]+!', '_', $cached->cache_id) : null;
        $_compile_id = isset($cached->compile_id) ? preg_replace('![^\w\|]+!', '_', $cached->compile_id) : null;

        $cached->filepath = sha1($cached->source->filepath . $_cache_id . $_compile_id);
        $this->populateTimestamp($cached);
    }

    /**
     * populate Cached Object with timestamp and exists from Resource
     *
     * @param Smarty_Template_Cached $source cached object
     * @return void
     */
    public function populateTimestamp(Smarty_Template_Cached $cached)
    {
        $mtime = $this->fetchTimestamp($cached->filepath, $cached->source->name, $cached->cache_id, $cached->compile_id);
        if ($mtime !== null) {
            $cached->timestamp = $mtime;
            $cached->exists = !!$cached->timestamp;
            return;
        }
        $timestamp = null;
        $this->fetch($cached->filepath, $cached->source->name, $cached->cache_id, $cached->compile_id, $cached->content, $timestamp);
        $cached->timestamp = isset($timestamp) ? $timestamp : false;
        $cached->exists = !!$cached->timestamp;
    }

    /**
     * Read the cached template and process the header
     *
     * @param Smarty_Internal_Template $_template template object
     * @param Smarty_Template_Cached $cached cached object
     * @return booelan true or false if the cached content does not exist
     */
    public function process(Smarty_Internal_Template $_template, Smarty_Template_Cached $cached=null)
    {
        if (!$cached) {
            $cached = $_template->cached;
        }
        $content = $cached->content ? $cached->content : null;
        $timestamp = $cached->timestamp ? $cached->timestamp : null;
        if ($content === null || !$timestamp) {
            $this->fetch(
                $_template->cached->filepath,
                $_template->source->name,
                $_template->cache_id,
                $_template->compile_id,
                $content,
                $timestamp
            );
        }
        if (isset($content)) {
            $_smarty_tpl = $_template;
            eval("?>" . $content);
            return true;
        }
        return false;
    }

    /**
     * Write the rendered template output to cache
     *
     * @param Smarty_Internal_Template $_template template object
     * @param string                   $content   content to cache
     * @return boolean success
     */
    public function writeCachedContent(Smarty_Internal_Template $_template, $content)
    {
        return $this->save(
            $_template->cached->filepath,
            $_template->source->name,
            $_template->cache_id,
            $_template->compile_id,
            $_template->properties['cache_lifetime'],
            $content
        );
    }

    /**
     * Empty cache
     *
     * @param Smarty  $smarty   Smarty object
     * @param integer $exp_time expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    public function clearAll(Smarty $smarty, $exp_time=null)
    {
        $this->cache = array();
        return $this->delete(null, null, null, $exp_time);
    }

    /**
     * Empty cache for a specific template
     *
     * @param Smarty  $smarty        Smarty object
     * @param string  $resource_name template name
     * @param string  $cache_id      cache id
     * @param string  $compile_id    compile id
     * @param integer $exp_time      expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    public function clear(Smarty $smarty, $resource_name, $cache_id, $compile_id, $exp_time)
    {
        $this->cache = array();
        return $this->delete($resource_name, $cache_id, $compile_id, $exp_time);
    }

}
?>

<div id="header">
	<div id="top">
		<div class="main">
			<div class="left">您好，欢迎来到完美商城！</div>
			<div class="right">
								<a href="http://localhost/upload/?/user/index.html">用户中心</a>|
				<a href="http://localhost/upload/?/user/mod-register/index.html">快速注册</a>|
								<a href="http://localhost/upload/?/user/mod-order_sheet/index.html">查看订单</a>

			</div>
		</div>
	</div>
	<div class="main">
		<div class="logo"><a href=""><img src="http://localhost/upload/images/logo.jpg"></a></div>
		<div class="search">
			<div class="form">
				<form id="form_search" method="post" action="http://localhost/upload/?/search/index.html">
					<input name="cat" type="hidden" value="0">
					<input class="text" name="key" type="text" maxlength="30" onkeydown="if(event.keyCode == 13)do_search();" value="以撒的结合">
					<input class="bt" type="button" onclick="do_search()" value="搜商品">
				</form>
			</div>
			<div class="hot_word">
								<a href="http://localhost/upload/?/search/cat-0/key-xbox/index.html">xbox</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-3ds/index.html">3ds</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-gba/index.html">gba</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-nds/index.html">nds</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-switch/index.html">switch</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-ps4/index.html">ps4</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-pc/index.html">pc</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-雅达利/index.html">雅达利</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-BB霜/index.html">BB霜</a>							</div>
			<script language="javascript">
				var default_search = "以撒的结合";
			</script>

			<script language="javascript">
				$("#form_search .text").focus(function(){
					if($(this).val() == default_search)
					{
						$(this).val("");
					}
					$(this).css("color","#000");
				});
				$("#form_search .text").blur(function(){
					if($(this).val() == "")
					{
						$(this).val(default_search);
						$(this).css("color","#999");
					}
				});
			</script>

		</div>
		<div id="cart">
			<div class="img"></div>
			<a class="word" href="http://localhost/upload/?/flow/index.html">去购物车结算</a>
					</div>

		<script language="javascript">
			$("#cart").mouseover(function(){
				$("#cart .cart_list").show();
			});
			$("#cart").mouseout(function(){
				$("#cart .cart_list").hide();
			});
		</script>

	</div>
	<div id="nav">
		<div class="main">
			<div class="cat_head">全部商品分类</div>
						<a href="http://localhost/upload/?/index/">首&nbsp;&nbsp;&nbsp;页</a>
                        <a href="http://localhost/upload/?/goods/cat-1/">影&nbsp;&nbsp;&nbsp;像</a>
                        <a href="http://localhost/upload/?/goods/cat-2/">电&nbsp;&nbsp;&nbsp;器</a>
                        <a href="http://localhost/upload/?/goods/cat-3/">手&nbsp;&nbsp;&nbsp;机</a>
                        <a href="http://localhost/upload/?/goods/cat-4/">办&nbsp;&nbsp;&nbsp;工</a>
                        <a href="http://localhost/upload/?/goods/cat-5/">家&nbsp;&nbsp;&nbsp;具</a>
                        <a href="http://localhost/upload/?/goods/cat-6/">衣&nbsp;&nbsp;&nbsp;装</a>
                        <a href="http://localhost/upload/?/goods/cat-7/">化妆品</a>
                        <a href="http://localhost/upload/?/goods/cat-8/">奢侈品</a>
                        <a href="http://localhost/upload/?/goods/promotion-1/">特&nbsp;&nbsp;&nbsp;卖</a>
						<div class="clear"></div>
		</div>
	</div>
</div>