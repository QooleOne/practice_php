<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="flex_page">
         
			<h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="my_photo">
                    <?php  echo '<img src="img/photo.png">'; ?>                    
                </div>

                <div class="fullname">
					<p><?php echo $greetings; ?></p>
                    <p> Меня зовут 
                    <?php echo '<b>', $name, ' ', $surname, '</b><br>'; 
                          echo 'г.', ' ', $city; ?>                                      
                    </p> 
           
                    <p>Мне <?php echo $age; ?> лет</p>
                    <p> 
						Я научился создавать переменные PHP и<br>
						изучил простые операции с ними 
					</p>
                </div>
            </div>

            <div class="knowledge">
			
				<h2>Мои знания PHP</h2>
				
				<p class="text">
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
					<br>
                    <?php
                        $a = 10;
                        $b = 20;
                        $r1 = $a + $b;
						$r2 = $a - $b;
						$r3 = $a * $b;
                        echo $a, ' + ', $b, ' = ', $r1, '<br>';
						echo $a, ' - ', $b, ' = ', $r2, '<br>';
						echo $a, ' * ', $b, ' = ', $r3, '<br>';
                    ?>   
					<br>                
                    <?php
                        echo $d;
                    ?> 
				</p>
            </div>

            <div class="article">
                <p class="text">
                    На данной странице представлено практическое задание по основам PHP:
				<ul class="simple_list">
					<li>Установлен локальный веб-сервер Apache из XAMPP на Windows</li>
					<li>Создана папка с проектом в нужной директории и все необходимые в этой папке файлы .php</li>
					<li>В основном файле создан тестовый код для вывода</li>
					<li>Удалось запустить сервер и вывести в браузере тестовый код</li>
					<li>Создана основная верстка и добавлены стили</li>
					<li>Подключены дополнительные файлы и файлы с элементами кода</li>
					<li>В файле, где написан только код PHP, создана переменная со значением в виде строки — приветствие от автора страницы. Результат выведен в браузере</li>
					<li>Выведено изображение на странице в браузере</li>
					<li>Созданы переменные со значением: имя, фамилия, возраст, город, результат кода выведен в браузере</li>
					<li>Создан блок с классом knowledge и в нем продемонстрированы полученные знания, в виде созданных переменных с присвоенным значением разного типа, которые выведены в коде, а затем отображены в браузере</li>
					<li>Продемонстрированы разные типы операций, способов вывода кода и также результаты выведены в браузере</li>
					<li>Файлы сайта загружены в GitHub</li>
				</ul>
				</p>
            </div>
        </div>

        <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
