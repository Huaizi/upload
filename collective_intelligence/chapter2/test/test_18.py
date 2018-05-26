#!/usr/bin/python
# -*- coding: utf-8 -*-
# @version: 1.0
# @author: Aruan
# @date: '2015/4/15'


from chapter2.code import recommendations

if __name__ == "__main__":
    movies = recommendations.transformPrefs(recommendations.critics)
    print recommendations.topMatches(movies,'Superman Returns')
    print recommendations.getRecommendations(movies,'Just My Luck')




