<html>

<head>
    <title>Halls of Mind: Voting</title>
    <link rel='shortcut icon' href='logo.png'>
    <meta http-equiv='Cache-Control' content='private' charset='utf-8'>
    
    <link rel='stylesheet' type='text/css' href='css/main.css?12'>
    <link rel='stylesheet' type='text/css' href='css/fonts.css?12'>
    
    <script type='text/javascript' src='jquery-3.5.0.min.js'></script>
</head>



<body>
    
    <div id='div_main_scene' style='margin-bottom: 100px' align='center'>
    	<div style='display: block; width: 100%' align='center'>
            
            <div style='margin: 32px 0px 0px 64px' align='left'>
                <p class='futuraDemi' style='color: #222f3e; font-size: 1.2em'>Чертоги Разума (модель "Голосование")</p>
                <p class='futuraLight' style='color: #576574'>powered by andreaskostenko, see on Github: <a class='link_common' href='provide_link'>not ready</a></p>
                <p class='futuraLight' style='color: #576574'>images were taken from <a class='link_common' href='https://ru.wowhead.com'>wowhead.com</a></p>
            </div>
            
            <div style='margin: 32px 0px 32px 64px' align='left'>
                <a class='buttons_with_text anim_mouseover' id='btn_show_info' onclick='$("#div_info").removeClass("hidden"); $(this).addClass("hidden");'>узнать больше</a>
            </div>
            
            <div id='div_info' class='hidden' style='margin: 12px 64px 12px 64px; background-color: #fafafa; padding: 18px;' align='left'>
                
                <p class='text_info'>Это демонстрация моей методики взвешенного принятия Решений.</p>
                <p class='text_info'>Она базируется на неких основных ценностях (Элементы-Критерии), которыми я руководствуюсь.</p>
                
                <p class='text_info' style='margin-top: 12px'>Вот порядок действий по этой методологии:</p>
                <p class='text_info'>1. Cформулировать беспокоящий вопрос, например: "Стоит ли мне полностью отказаться от употребления алкоголя?".</p>
                <p class='text_info'>2. Превратить этот вопрос в проект Решения: "Я собираюсь полностью отказаться от употребления алкоголя".</p>
                <p class='text_info'>3. Начать голосование, ответив на вопросы Элементов-Критериев насчёт этого Решения.</p>
                <p class='text_info'>4. Получить расчёт результатов голосования, который базируется на простом принципе соотношения количеств голосов "за" и голосов "против".</p>
            </div>
            
    	    <div style='margin: 24px 0px 24px 64px' align='left'>
                <a class='buttons_with_text anim_mouseover' id='btn_toggle_voting_process'>начать голосование</a>
            </div>
            
            <div id='div_helper_voting' class='hidden' style='margin: 24px 0px 0px 64px' align='left'>
                <div style='display: flex; flex-direction: row; justify-content: flex-start; align-items: center; margin-bottom: 12px'>
                    <div><p style='margin: 0px; padding: 0px'>Чтобы голосовать, следуй за подсказкой: </p></div>
                    <div><img class='no_select' style='width: 32px' src='img/tip_mouse_leftclick.png'></div>
                </div>
                
                <a class='buttons_with_text anim_mouseover' onclick='simulate_full_voting();'>симулировать голосование всех элементов</a>
            </div>
            
            <div style='display: none; margin: 24px 0px 0px 64px'>
                <p class='text_vars'>var_current_procedure: <b id='var_current_procedure'>none</b></p>
                <p class='text_vars'>var_voting_format: <b id='var_voting_format'>long</b></p>
                <p class='text_vars'>var_cursor_at_elem: <b id='var_cursor_at_elem'>none</b></p>
                <p class='text_vars'>var_who_is_voting_now: <b id='var_who_is_voting_now'>none</b></p>
                
                <p class='text_vars'>var_answer_1: <b id='var_answer_1'>none</b></p>
                <p class='text_vars'>var_answer_2: <b id='var_answer_2'>none</b></p>
            </div>
            
            <div style=''>
            	<div style='position: relative; width: 100%'>
            	    
            	    <div style='margin-top: 120px; display: flex; flex-direction: row; justify-content: center; align-items: stretch;'>
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Health'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Health' voted='0' src='img/elements/Здоровье.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Health'>Не создаст ли Решение угрозу / вред здоровью?</span>
            		                <span id='q2-Health'>Поможет ли Решение укрепить здоровье?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Health' src='img/tip_contradiction.png'>
            		    </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Safety'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Safety' voted='0' src='img/elements/Сохранность.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Safety'>Не создаст ли Решение угрозу моей сохранности / безопасности?</span>
            		                <span id='q2-Safety'>Укрепит ли Решение мою сохранность / безопасность?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Safety' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Freedom'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Freedom' voted='0' src='img/elements/Свобода.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Freedom'>Не ограничит ли Решение мою свободу, не сделает ли меня менее свободным?</span>
            		                <span id='q2-Freedom'>Увеличит ли Решение мою свободу, сделает ли меня более свободным?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Freedom' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Advance'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Advance' voted='0' src='img/elements/Развитие.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Advance'>Не помешает ли Решение моему развитию?</span>
            		                <span id='q2-Advance'>Поможет ли Решение мне развиться краткосрочно или развиваться долгосрочно?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Advance' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Economics'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Economics' voted='0' src='img/elements/Экономика.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Economics'>Не создаст ли Решение угрозу / вред моей экономике (материальному благополучию, обеспеченности)?</span>
            		                <span id='q2-Economics'>Поможет ли Решение укрепить мою экономику (материальное благополучие, обеспеченность)?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Economics' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Science'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Science' voted='0' src='img/elements/Наука.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Science'>Не идёт ли Решение против моих представлений о науке, научности, научному подходу, т.е. не является ли оно научно необоснованным?</span>
            		                <span id='q2-Science'>Соответствует ли Решение моим представлениям о науке, научности, научному подходу, т.е. является ли оно научно обоснованным?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Science' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Duty'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Duty' voted='0' src='img/elements/Долг.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Duty'>Не идёт ли Решение против моих представлений о выполнении моего долга?</span>
            		                <span id='q2-Duty'>Соответствует ли Решение моим представлениям о выполнении моего долга, служит ли оно их воплощению?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Duty' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Equity'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Equity' voted='0' src='img/elements/Справедливость.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Equity'>Не идёт ли Решение против моих представлений о справедливости?</span>
            		                <span id='q2-Equity'>Соответствует ли это Решение моим представлениям о справедливости, служит ли оно их воплощению?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Equity' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Legality'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Legality' voted='0' src='img/elements/Правомерность.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Legality'>Не нарушит ли выполнение Решения правомерность моих действий?</span>
            		                <span id='q2-Legality'>Сделает ли Решение мои действия более правомерными?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Legality' src='img/tip_contradiction.png'>
            	        </div>
            	        
            	        <div class='div_of_element_outer'>
            		        <div class='div_of_element'>
            		            <div class='element_background hidden' id='back_Authority'></div>
            		            <img class='element_picture canonic_border no_select' id='elem_Authority' voted='0' src='img/elements/Авторитет.jpg' id=''>
            		            <div style='display: none'>
            		                <span id='q1-Authority'>Не подорвёт ли Решение мой авторитет в обществе?</span>
            		                <span id='q2-Authority'>Укрепит ли Решение мой авторитет в обществе?</span>
            		            </div>
            		        </div>
            		        
            		        <img class='img_tip_leftclick hidden no_select' src='img/tip_mouse_leftclick.png'>
            		        <img class='img_tip_contradiction hidden no_select' id='contradiction_Authority' src='img/tip_contradiction.png'>
            		    </div>
            	    </div>
            	    
            	    
            	    <!-- панель развёрнутого голосования -->
            	    <div id='div_panel_long_voting' class='canonic_border' style='display: none; margin-top: 12px; width: 640px; background-color: #333; z-index: 30'>
            	        <div style='position: relative'>
            		        <span class='mo_bright' id='btn_close_plv' style='position: absolute; cursor: pointer; right: 2px; color: #555; font-family: "futuraDemi"'>[x]</span>
            		        
            		        <div style='padding-top: 20px'>
                		        <div style='display: flex; flex-direction: row; justify-content: center; align-items: center;'>
                		            <div style='margin-right: 24px'><img id='img_of_element_voting' class='canonic_border no_select' style='width: 32px'></div>
                		            <div><p id='txt_title_of_element_voting' style='color: #fafafa; font-family: "futuraDemi"; margin: 0px; padding: 0px'></p></div>
                		        </div>
            		        </div>
            		        
            		        <div style='padding: 24px;'>
            			        <p id='plv_question_1' class='text_question' style=''>Вопрос_1</p>
            			        <span class='btn_long_voting btn_plv_answer anim_mouseover' id='btn_plv_answer_q1_yes' my_oppo='btn_plv_answer_q1_no' myval='yes'>ДА</span>
            			        <span class='btn_long_voting btn_plv_answer anim_mouseover' id='btn_plv_answer_q1_no' my_oppo='btn_plv_answer_q1_yes' myval='no'>НЕТ</span>
            			        
            			        <p id='plv_question_2' class='text_question' style='margin-top: 24px'>Вопрос_2</p>
            			        <span class='btn_long_voting btn_plv_answer anim_mouseover' id='btn_plv_answer_q2_yes' my_oppo='btn_plv_answer_q2_no' myval='yes'>ДА</span>
            			        <span class='btn_long_voting btn_plv_answer anim_mouseover' id='btn_plv_answer_q2_no' my_oppo='btn_plv_answer_q2_yes' myval='no'>НЕТ</span>
            			        
            			        <div style='margin-top: 18px'>
            			            <span class='btn_long_voting anim_mouseover' id='btn_end_plv' style='visibility: hidden; width: auto'>позиция сформирована</span>
            			        </div>
            		        </div>
            		    </div>
            	    </div>
            	    
            	    
            	    <!-- подсказка о названиях элементов -->
            	    <div style='position: absolute; width: 256px; left: calc(50% - 128px); top: 220px'>
            			<p id='tip_element_name' style='color: #444444; font-size: 1.4em; text-align: center; font-family: "futuraBold"'></p>
            		</div>
            		
            	    
            	    <!-- кнопка подсчёта и дополнительные тексты -->
            	    <div style='margin: 60px 0px 0px 0px'>
            	        <p id='txt_contradictions_detected' class='hidden'>Есть элементы, по обоим вопросам которых даны ответы "да" (выделены <b style='color: #f4a60b'>жёлтым</b>).<br>
            	        Необходимо в конечном итоге ответить иначе, чтобы получить доступ к результатам голосования.</p>
            	        
            	        <a class='buttons_with_text hidden' id='btn_calculate_votes'>подсчитать голоса</a><br>
            	    </div>
            	    
            	    
            	    <!-- панель с результатами -->
            	    <div id='div_voting_results' class='hidden canonic_border' style='margin: 24px 32px 100px 32px; padding: 18px 0px 18px 0px'>
                        <div id='voting_results' style='color: #444444; text-align: left; padding: 12px 24px 12px 24px; font-family: "futuraBook"'></div>
                    </div>
            	</div>
            </div>
    	</div>
    </div>
    
    
    
    <script>
        
        // страница загружена:
        $(document).ready(function(){
            $('html, body').animate({ scrollTop: 0 }, 200);
        });
        
        // курсор наведён на элемент:
        $('.element_picture').mouseover(function(){
            
            let a = $(this).attr('src');
            a = a.replace(/img\/elements\//, '');
            a = a.replace(/\.jpg/, '');
        	$('#tip_element_name').text(a);
        });
        
        // курсор вышел из элемента:
        $('.element_picture').mouseleave(function(){
            
        	$('#tip_element_name').text('');
        });
        
        
        // клик - переход к голосованию:
        $('#btn_toggle_voting_process').click(function(){
            
            // в любом случае спрятать кнопку подсчёта голосов:
            $('#btn_calculate_votes').addClass('hidden');
            
            // если голосование не идёт:
            if( $('#var_current_procedure').text() != 'voting' ){
                
                $('#div_helper_voting').removeClass('hidden');
                
                $(this).text('прервать голосование');
                
                // показать изображения-подсказки:
                $('.img_tip_leftclick').removeClass('hidden');
                
                // показать рамку:
                    $('.div_of_element').css('box-shadow', '0px 0px 1px 0px #000');
                    $('.div_of_element').css('border', 'solid 1px #201c18');
                
                // выставить цвет фонов по умолчанию:
                $('.element_background').css('background-color', '#111111');
                
                // показать фоны:
                $('.element_background').removeClass('hidden');
                
                // выставить формат голосования по умолчанию:
                $('#var_voting_format').text('long');
                
                // скинуть все состояния голосов основных элементов:
                    $('.element_picture').attr('voted', '0');
            		$('.element_picture').attr('vote', 'none');
            		$('.element_picture').attr('question_one', '9');
            		$('.element_picture').attr('question_two', '9');
        		
        		// скинуть другие переменные:
        		    $('#var_who_is_voting_now').text('none');
        		    $('#var_answer_1').text('none');
        		    $('#var_answer_2').text('none');
                
                $('#var_current_procedure').text('voting');
                    
                $('#div_footer').css('margin-top', '200px');
            }
            
            // иначе, если голосование идёт:
            else{
                
                // закрыть панель развёрнутого голосования:
                close_plv();
                
                // спрятать ненужное:
                    $('#div_helper_voting').addClass('hidden');
                    $('.element_background').addClass('hidden');
                    $('.div_of_element').css('box-shadow', '0px 0px 0px 0px #000');
                    $('.div_of_element').css('border', 'solid 0px #000');
                    $('#btn_calculate_votes').addClass('hidden');
                    $('.img_tip_leftclick').addClass('hidden');
                    $('.img_tip_contradiction').addClass('hidden');
                    toggle_div_results_visibility(false);
                
                $('#var_current_procedure').text('none');
                
                $(this).text('начать голосование');
                
                $('#div_footer').css('margin-top', '400px');
            }
        });
        
        
        // наведение/вывод курсора с внешнего контейнера элемента:
        	$('.element_background').mouseover(function(){
        		$('#var_cursor_at_elem').text($(this).attr('id'));
        	});
        	$('.element_background').mouseleave(function(){
        		$('#var_cursor_at_elem').text('');
        	});
        
        
        // ввод курсора на изображение-подсказку:
        $('.img_tip_leftclick').mouseover(function(){
            $(this).addClass('hidden');
        });
        
        
        // клик - выбран элемент:
    	$('.element_background').click(function(){
    	    
    	    let elem_id = $(this).attr('id');
    	    elem_id = elem_id.replace(/back_/g, '');
    	    
    	    $('.img_tip_leftclick').addClass('hidden');
    	    show_voting_questions(elem_id);
    	});
    	
    	
    	// клик по изображению-предупреждению - симулировать клик по соотв. элементу:
    	$('.img_tip_contradiction').click(function(){
    	    
    	    let elem_id = $(this).attr('id');
    	    elem_id = elem_id.replace(/contradiction_/g, '');
    	    
    	    $('#back_' + elem_id).trigger('click');
    	});
        
        
        // функция - показать вопросы элемента для формирования позиции:   
        function show_voting_questions(elem_id){
                        console.log('f "show_voting_questions" called with param "elem_id" = ' + elem_id );
            
    	    $('#var_who_is_voting_now').text( 'elem_' + elem_id );
    	    
    	    // спрятать ненужное:
    	        toggle_div_results_visibility(false);
    	        $('#btn_calculate_votes').addClass('hidden');
    	    
    	    if( $('#var_voting_format').text() == 'long' ){
    	        
    	        // выставить заголовок и изображение:
    	            //elem_id = 'elem_' + elem_id;
    	            let src = $('#elem_'+elem_id).attr('src');
    	            let title = src.replace(/img\/elements\//, '');
                    title = title.replace(/\.jpg/, '');
    	            $('#txt_title_of_element_voting').text( title );
    	            $('#img_of_element_voting').attr( 'src', src );
    	        
    	        // выставить вопросы:
        	        $('#plv_question_1').text( $('#q1-'+elem_id).text() );
        	        $('#plv_question_2').text( $('#q2-'+elem_id).text() );
    	        
    	        $('#div_panel_long_voting').attr('answer_1', 'not_provided');
    	        $('#div_panel_long_voting').attr('answer_2', 'not_provided');
    	        $('#var_answer_1').attr('none');
    	        $('#var_answer_2').attr('none');
    	        
    	        // скинуть анимации кнопок ответов:
        	        $( '#btn_plv_answer_q1_yes' ).addClass('btn_long_voting').removeClass('btn_long_voting_done');
        	        $( '#btn_plv_answer_q1_no' ).addClass('btn_long_voting').removeClass('btn_long_voting_done');
        	        $( '#btn_plv_answer_q2_yes' ).addClass('btn_long_voting').removeClass('btn_long_voting_done');
        	        $( '#btn_plv_answer_q2_no' ).addClass('btn_long_voting').removeClass('btn_long_voting_done');
    	        
    	        $('#btn_end_plv').css('visibility', 'hidden');
    	        $('#div_panel_long_voting').css('display', 'block');
    	    }
    	    else{
    	        console.warn('".element_background" clicked, but voting_format is NOT long.');
    	    }
    	}
    	
    	
    	// клик - дан ответ на вопрос:
    	$('.btn_plv_answer').click(function(){
    	    
    	    $(this).addClass('btn_long_voting_done').removeClass('btn_long_voting');
    	    $( '#'+$(this).attr('my_oppo') ).addClass('btn_long_voting').removeClass('btn_long_voting_done');
    	    
    	    let a = $(this).attr('id');
    	    
    	    // выставить состояние выбранности ответа на 1-й вопрос:
    	    if( a == 'btn_plv_answer_q1_yes' || a == 'btn_plv_answer_q1_no' ){
    	        
    	        $('#div_panel_long_voting').attr('answer_1', 'provided');
    	        $('#var_answer_1').text( $(this).attr('myval') );
    	    }
    	    
    	    // выставить состояние выбранности ответа на 2-й вопрос:
    	    if( a == 'btn_plv_answer_q2_yes' || a == 'btn_plv_answer_q2_no' ){
    	        
    	        $('#div_panel_long_voting').attr('answer_2', 'provided');
    	        $('#var_answer_2').text( $(this).attr('myval') );
    	    }
    	    
    	    check_is_plv_ready_to_finish();
    	});
    	
    	
    	// функция - даны ли ответы на оба вопроса:
    	function check_is_plv_ready_to_finish(){
    	    if( $('#div_panel_long_voting').attr('answer_1') == 'provided' && $('#div_panel_long_voting').attr('answer_2') == 'provided' ){
    	        $('#btn_end_plv').css('visibility', 'visible');
    	    }
    	}
    	
    	
    	// клик - закрыть панель развёрнутого голосования:
    	$('#btn_end_plv').click(function(){ evaluate_answers($('#var_who_is_voting_now').text().replace(/elem_/g, ''), $('#var_answer_1').text(), $('#var_answer_2').text()); close_plv(); });
    	$('#btn_close_plv').click(function(){ close_plv(); });
    	
    	
    	// функция - оценить ответы в развёрнутом голосовании:
    	function evaluate_answers(elem_id, answer_1, answer_2){
    	    
    	    let position = evaluate_answers_combination(answer_1, answer_2);
    	    
    	    set_vote_of_element(elem_id, position, answer_1, answer_2);
    	}
    	
    	
    	// функция - оценить комбинацию ответов и выявить позицию элемента:
    	function evaluate_answers_combination(answer_1, answer_2){
    	    
    	    // ЕСЛИ на первый вопрос "ДА" и на второй "ДА":
    	    if( answer_1 == 'yes' && answer_2 == 'yes' ){
    	        
                return 'contr';
    	    }
    	    
    	    // ЕСЛИ на первый вопрос "ДА" и на второй "НЕТ":
    	    if( answer_1 == 'yes' && answer_2 == 'no' ){
                
                return 'no';
    	    }
    	    
    	    // ЕСЛИ на первый вопрос "НЕТ" и на второй "НЕТ":
    	    if( answer_1 == 'no' && answer_2 == 'no' ){
    	        
    	        return 'refr';
    	    }
    	    
    	    // ЕСЛИ на первый вопрос "НЕТ" и на второй "ДА":
    	    if( answer_1 == 'no' && answer_2 == 'yes' ){
    	        
    	        return 'yes';
    	    }
    	}
    	
    	
    	// функция - установить голос элемента:
        function set_vote_of_element(elem_id, set_vote, answer_1, answer_2){
                        //console.warn('f "set_vote_of_element" launched, elem_id = "' + elem_id + '"; set_vote = "' + set_vote + '".');
                        
            $('#elem_' + elem_id).attr('voted', '1');
            
            if( set_vote == 'yes' ){
    	        $('#back_' + elem_id).css('background-color', '#78e08f');
    			$('#elem_' + elem_id).attr('vote', 'yes');
            }
            
            if( set_vote == 'no' ){
    	        $('#back_' + elem_id).css('background-color', '#eb2f06');
    			$('#elem_' + elem_id).attr('vote', 'no');
            }
            
            if( set_vote == 'refr' ){
    	        $('#back_' + elem_id).css('background-color', '#0033cc');
    			$('#elem_' + elem_id).attr('vote', 'refr');
            }
            
            if( set_vote == 'contr' ){
    	        $('#back_' + elem_id).css('background-color', '#f6b93b');
    			$('#elem_' + elem_id).attr('vote', 'contr');
    			$('#elem_' + elem_id).attr('voted', '0');
    			
                // показать подсказку о противоречии:
    			$('#contradiction_' + elem_id).removeClass('hidden');
    			$('#txt_contradictions_detected').removeClass('hidden');
            }
            else{
                $('#contradiction_' + elem_id).addClass('hidden');
                if_no_contradictions();
            }
            
            $('#elem_' + elem_id).attr('answer_1', answer_1);
            $('#elem_' + elem_id).attr('answer_2', answer_2);
            
            // проверить, все ли проголосовали:
            if_every_element_voted();
        }
    	
    	
    	// функция - закрыть панель развёрнутого голосования
    	function close_plv(){
    	    
    	    $('#div_panel_long_voting').css('display', 'none');
    	    $('#div_panel_long_voting').attr('answer_1', 'not_provided');
    	    $('#div_panel_long_voting').attr('answer_2', 'not_provided');
    	    
    	    // проверить, все ли проголосовали:
            if_every_element_voted();
    	}
        
        
        // функция - проверить, все ли элементы проголосовали:
        function if_every_element_voted(){
            
            let vote;
            let is_every_element_voted = true;
            
            // для каждого элемента:
            $('.element_picture').each(function(i){
                
                vote = $('.element_picture:eq('+i+')').attr('voted');
                
                if( vote == '0' ){
                    is_every_element_voted = false;
                }
            });
            
            // если все проголосовали, показать кнопку подсчёта голосов:
            if( is_every_element_voted ){
    			
                $('#btn_calculate_votes').removeClass('hidden');
            }
        }
        
        
        // функция - проверить, есть ли противоречия:
        function if_no_contradictions(){
            
            let vote;
            let is_no_contradictions = true;
            
            // для каждого элемента:
            $('.element_picture').each(function(i){
                
                vote = $('.element_picture:eq('+i+')').attr('vote');
                
                if( vote == 'contr' ){
                    is_no_contradictions = false;
                }
            });
            
            // если нет противоречий, убрать текст о противоречиях:
            if( is_no_contradictions ){
                
                $('#txt_contradictions_detected').addClass('hidden');
            }
        }
        
        
        // клик - подсчитать голоса:
        $('#btn_calculate_votes').click(function(){
            
            $(this).addClass('hidden');
            
            // закрыть панель развёрнутого голосования, если она вдруг открыта:
            close_plv();
            
            // спрятать подсказки:
            $('.img_tip_leftclick').addClass('hidden');
            
            // подготовка к анализу голосов:
                let whole_text = '';
                let elem_name, which_vote, a_1, a_2, current_row, verdict;
                let cnt_ye = 0;
                let cnt_no = 0;
                let cnt_re = 0;
                let show_to = -1;
            
            
            // для каждого элемента:
            $('.element_picture').each(function(i){
                
                elem_name = $('.element_picture:eq('+i+')').attr('src');
                elem_name = elem_name.replace(/img\/elements\//, '');
                elem_name = elem_name.replace(/\.jpg/, '');
                
                which_vote = $('.element_picture:eq('+i+')').attr('vote');
                if( which_vote == 'yes' ){ which_vote = 'ЗА'; cnt_ye++; show_to = cnt_ye; }
                if( which_vote == 'no' ){ which_vote = 'ПРОТИВ'; cnt_no++; show_to = cnt_no; }
                if( which_vote == 'refr' ){ which_vote = 'УДЕРЖ.'; cnt_re++; show_to = cnt_re; }
                
                
                if( $('.element_picture:eq('+i+')').attr('answer_1') == 'yes' ){ a_1 = 'да'; }
                if( $('.element_picture:eq('+i+')').attr('answer_1') == 'no' ){ a_1 = 'не'; }
                
                if( $('.element_picture:eq('+i+')').attr('answer_2') == 'yes' ){ a_2 = 'да'; }
                if( $('.element_picture:eq('+i+')').attr('answer_2') == 'no' ){ a_2 = 'не'; }
                
                let img_url = $('.element_picture:eq('+i+')').attr('src');
                let img_td = '<img class="canonic_border no_select" style="width: 16px" src="' + img_url + '">';
                current_row = '<tr><td>' + img_td + '</td><td>' + elem_name + '</td><td></td><td></td><td>' + a_1+'/'+a_2 + '</td><td></td><td>></td><td>' + which_vote + '</td></tr>';
                            //console.log('current_row: ' + current_row);
                
                whole_text = whole_text + current_row;
            });
            
            let table_1 = '<table class="table_voting_results">' + whole_text + '</table>';
            
            
            // подсчёт голосов:
                let counting = `<tr><td>голосов "за": </td><td>` + cnt_ye + `</td></tr>
                <tr><td>голосов "против": </td><td>` + cnt_no + `</td></tr>
                <tr><td>голосов "удерж.": </td><td>` + cnt_re + `</td></tr>`;
                
                whole_text = '<tr><td style="padding-bottom: 24px"></td></tr>' + counting;
            
            
            // вердикт:
                // если голосов "ЗА" больше, чем голосов "ПРОТИВ":
                if( cnt_ye > cnt_no ){
                    verdict = `<tr><td>Голосов "за" больше, чем голосов "против".<br>Итак, решение допускается.</td></tr>`;
                }
                
                // если голосов "ЗА" меньше, чем голосов "ПРОТИВ":
                if( cnt_ye < cnt_no ){
                    verdict = `<tr><td>Голосов "за" меньше, чем голосов "против".<br>Итак, решение не допускается.</td></tr>`;
                }
                
                // если голосов "ЗА" столько же, сколько и голосов "ПРОТИВ":
                if( cnt_ye == cnt_no ){
                    verdict = `<tr><td>Голосов "за" столько же, сколько и голосов "против".<br>Итак, решение не допускается.</td></tr>`;
                }
                
                whole_text = whole_text + '<tr><td style="padding-bottom: 24px"></td></tr>' + verdict;
            
            let table_2 = '<table class="table_voting_results">' + whole_text + '</table>';
            
            
            $('#voting_results').html(table_1 + table_2);
            toggle_div_results_visibility(true);
            
            scroll_page_down();
        });
        
        
        // функция - видимость контейнера с результатами голосования:
    	function toggle_div_results_visibility(status){
    	    
    	    if( status ){
    	        $('#div_voting_results').removeClass('hidden');
    	    }
    	    else{
    	        $('#div_voting_results').addClass('hidden');
    	    }
    	}
        
        
        // функция - получить случайным образом целое число в диапазоне:
        function get_random_int_between_ints(min, max) {
            let result = Math.floor(Math.random() * (max - min + 1)) + min;
            //console.log( 'rnd = ' + result );
            return result;
        }
        
        
        // функция - симулировать проголосованность всех элементов:
        function simulate_full_voting(){
            
            // спрятать кнопку подсчёта голосов:
            $('#btn_calculate_votes').addClass('hidden');
            
            // спрятать результаты голосования, если они были отображены:
            toggle_div_results_visibility(false);
            
            let elem_id, answer_1, answer_2, rnd;
            
            // для каждого элемента сгенерировать жизнеспособную комбинацию ответов:
            $('.element_picture').each(function(i){
                
                elem_id = $('.element_picture:eq('+i+')').attr('id');
                elem_id = elem_id.replace(/elem_/g, '');
                
                rnd = get_random_int_between_ints(0, 8);
                
                if( rnd <= 3 ){
                    answer_1 = 'yes';
                    answer_2 = 'no';
                }
                
                if( rnd >= 4 && rnd <= 6 ){
                    answer_1 = 'no';
                    answer_2 = 'yes';
                }
                
                if( rnd >= 7 ){
                    answer_1 = 'no';
                    answer_2 = 'no';
                }
                
                evaluate_answers(elem_id, answer_1, answer_2)
            });
        }
        
        
        // функция - скролл страницы вниз:
        function scroll_page_down(){
            $('html, body').animate({ scrollTop: $(document).height() }, 1200);
        }
        
        
        // открытие ссылок в новой вкладке:
        $('body').on('click', '.link_common', function(event){
            event.preventDefault();
            window.open($(this).attr('href'), '_blank');
        });
    </script>
</body>

</html>
