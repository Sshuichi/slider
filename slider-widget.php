<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/qa-slider/slider-widget.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Show social proof


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	class qa_slider
    {

        function allow_template($template)
        {
            return true;
        }


        function allow_region($region)
        {
            return ($region == 'main');
        }


        function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
        {

            echo'
                            <div class="my-slider" id="slicker" style="display: none;">
                              <div class="t-container">
                                  <blockquote>
                                        <div class="profile testimonial-1"></div>
                                        <div class="t-what">بفضل الأستاذ أيمن رجل قانون وتوجيهاته اختصرت أياما عديدة وعرفت الخطوات اللازمة لحل قضيتي.</div>
                                        <div class="t-who">رشيدة، استاذة</div>
                                  </blockquote>
                              </div>
                              <div class="t-container">
                                  <blockquote>
                                        <div class="profile testimonial-2"></div>
                                        <div class="t-what">محكمتي موقع استشارات بامتياز ، شخصيا اصبح لدي رصيد معرفي قانوني خصوصا في المادة التجارية.</div>
                                        <div class="t-who">عبد الله، مقاول</div>
                                  </blockquote>
                              </div>
                              <div class="t-container">
                                  <blockquote>
                                        <div class="profile testimonial-4"></div>
                                        <div class="t-what">تحياتي إلى الأستاذ دليلك القانوني، إستشارة واحدة قلبت مجرى المحاكمة. أنا وابنتي نور ممتنتان له</div>
                                        <div class="t-who">رجاء، ربة بيت</div>
                                  </blockquote>
                              </div>
                              <div class="t-container">
                                  <blockquote>
                                        <div class="profile testimonial-3"></div>
                                        <div class="t-what">لقد لمست إحترافية عالية وتجربة كبيرة لدى الأساتذة الخبراء. انصح به كل من يحتاج رأيا قانونيا</div>
                                        <div class="t-who">علي - موظف حكومي</div>
                                  </blockquote>
                              </div>   
                            </div>
            ';

        }


    }