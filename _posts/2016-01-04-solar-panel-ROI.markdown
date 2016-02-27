---
layout: post
title:  "Solar panel return of interest"
date:   2016-01-04 00:00:21
---

============v1.1============

1.Add Share component on Free Report page(header second button)
it could be nice if a person receive a report and satisfied could potentially
advertise the website to his/her friends.

2.Add solar panel product list/investment product list(Dashboard main
page->the second tab out of 4, 'Investment Chance!')
the idea is bring more chance/opportunity to end users.
for those people who has money but no more spare space,
they can help others to install solar panel, they can share the profits.

3.Add comments page
News shared by users could inspiring the hesitated user to move ahead.

4.plot. please check hw10 list

5.The other things I could think of are
|- design specifications(dtd/schema) for smart home appliance. once it's done,
   it can digest all data send from those home appliance for more precise calculation.
|- in order to predict the future's profits, this is a Supervised Learning Problem,
   we need the correct historical data as the fundamental to make the further guess, 
   but I am still leaning Machine Learning, so this is just a rough idea.
|- use tools to monitor the website, http://zhanzhang.baidu.com/dashboard/index this is chinese version

Bower: package manager like maven.
Grunt: for test
few tables altered. for this please check my github account https://github.com/xinerd/SP_ROI
for more question, please send me Email xin_ming@student.uml.edu

==========v1.0==========

Integration of the solar panel ROI calculator
1.Sign up/Email Activation/Login with proper exception handling
2.ROI free report
3.Detect/know location
4.Get temp/sun profile use Ajax/AngularJS
5.Get local cost of kWh, cost + output per panel use Ajax/AngularJS
6.Solar Panel Monthly Report
7.Investment ROI Comparison
8.Milestone
9.Appliance Power Consumption
10.Tracker
11.Responsive design for entire website, fit for both desktop and mobile device
P.s. on dashboard page, only Dashboard and Monitor on the sidebar are functional
the other haven't implemented.

==========v0.9==========

On Monitor page, both Weather Monitor module and Solar Panel Data module 
use AngularJs to sync data with database.
used redbean as orm, but doesn't work with weblab server.

==========v0.8==========

the project currently use below stuff:
jQuery
Bootstrap
font-awesome : nice-look css
metisMenu : for menu
morrisjs : for chart

==========v0.7==========

Weather Monitor: it shows date, temparature, weather type. this data load with
page.
(I think this information should be collected by sensor installed with solar panel 
rather than use weather report api, 
because the one with solar panel is more pricise.
that sensor should send xml/json with fundamental inforamtion back to server for analysis)

solar Panel Data: it shows solar panel generated power, home appliance's
comsumed power, each day's income. this data does not load automatically.

both above data can be updated by clicked update button.

==========v0.6==========

Solar Panel Monthly Report: this chart show how much electrity the solar panel you owned generated, 
how much comsuption your home appliance comsumed, 
and total income earned in each month.

Investment ROI Comparison: this chart intend to compare different investment interests, 
so you will know which investment interests is highest.

Milestone: this time line chart shows your investment milestone, 
for example, when you start, when your investment returns.

Appliance Power Consumption: how much electricity comsumed by your home appliance in different types.

Tracker: I think a person could pontential invest many different project, 
say solar panel, stock, real estate. 
so the idea of this one is to track different project progress, 
you will know what percetage investment you already received.

==========v0.1=========

Issue fixed

Code Refactoring
OOP(Object Oriented Programming)
MVC(model-view-controller)
Use red bean for ORM (Object-Relationship-Mapping)
Use .htaccess to route all request to controller system


After Refactoring, the benefits are
add new features to the website is easy
minimize the effects of messing up php and html code
maintain is easy too

[Project structure:doc/project_tree_map.md](https://github.com/xinerd/SP_ROI/blob/gh-pages/doc/project_tree_map.txt)

