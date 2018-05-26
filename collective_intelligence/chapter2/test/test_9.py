#!/usr/bin/python
# -*- coding: utf-8 -*-
# @version: 1.0
# @author: Aruan
# @date: '2015/4/11'


from chapter2.code.recommendations import critics

if __name__ == "__main__":
    print critics['Lisa Rose']['Lady in the Water']
    critics['Toby']['Snakes on a Plane'] = 3.0
    print critics['Toby']

