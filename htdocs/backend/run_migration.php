<?php
    $migrationsDir = 'C:\MAMP\htdocs\backend\migrations';

    $files = scandir($migrationsDir);

    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'sql') {
            $sql = file_get_contents("$migrationsDir/$file");
            // Выполнение всех SQL-запросов одновременно
            if ($mysqli->multi_query($sql)) {
                do {
                    // Ждем завершения каждого запроса
                } while ($mysqli->more_results() && $mysqli->next_result());
                
                echo 'Миграция успешно выполнена';
            } else {
                echo 'Ошибка выполнения миграции: ' . $mysqli->error;
            }
        }
    }
?>