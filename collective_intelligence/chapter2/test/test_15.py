#!/usr/bin/python
# -*- coding: utf-8 -*-
# @version: 1.0
# @author: Aruan
# @date: '2015/4/13'


from chapter2.code import recommendations

if __name__ == "__main__":
    print recommendations.topMatches(recommendations.critics,'Toby',n=3)




