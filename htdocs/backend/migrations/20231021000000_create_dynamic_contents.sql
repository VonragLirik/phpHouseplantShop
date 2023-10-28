CREATE TABLE `shop`.`dynamic_contents` ( `id` INT NOT NULL AUTO_INCREMENT , `type` VARCHAR(100) NOT NULL , `content` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `dynamic_contents` (`id`, `type`, `content`) VALUES (NULL, 'main_page', '<h1>Магазин комнатных растений</h1>\r\n <h2>Адрес - г. Ростов-на-Дону, ул. сказочников, д. 2</h2>');

INSERT INTO `dynamic_contents` (`id`, `type`, `content`) VALUES (NULL, 'about_author_page', '<h1>Автор сайта - Гарнов Кирилл</h1>
        <h2>
          Email -
          <a href="mailto:kirill-garnov@mail.ru" target="_blank">
            <span>kirill-garnov@mail.ru</span>
          </a>
        </h2>');

INSERT INTO `dynamic_contents` (`id`, `type`, `content`) VALUES (NULL, 'about_company_page', '
        <h1>Название компании - магазин комнатных растений</h1>
        <h2>Контакты - Гарнов Кирилл</h2>
        <h2>Телефон - 8-800-555-35-35</h2>
        <h2>Адрес - г. Ростов-на-Дону, ул. сказочников, д. 2</h2>');