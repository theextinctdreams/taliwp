<?php

get_header(); // подключаем header.php ?>

<?php get_sidebar(); // подключаем sidebar.php ?>
	<div class="col-md-9">
		<div class="banner"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/background-header.jpg" /></div>
	
			<div class="row">
                <div class="col-md-12 breadcrumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
				<div class="col-md-12"><h1 class="title-post"><?php the_title(); // заголовок поста ?></h1></div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            <p>Завод «ПОДЕМ» находится в городе Габрово республики Болгария и начинает свою историю в 1961 г. Производство было организовано таким образом, чтобы удовлетворить потребности стран, входящих в Совет экономической взаимопомощи. Со времен своего создания ПОДЕМ привлекал высококвалифицированных специалистов для разработки грузоподъемного оборудования, отвечающего всем мировым требованиям. Сегодня ПОДЕМКРАН является одним из мировых лидеров в производстве грузоподъемного оборудования, это результат накопленного за полвека опыта, применение современных технологий в области материалов и компонентов.</p>
                            <p>На сегодняшний день в приоритетных задачах компании ПОДЕМКРАН ставятся: высокое качество продукции, поддержание имиджа завода и соблюдение всех требований нормативной документации, учет требований клиентов и тенденций рынка при производстве и проектировании оборудования, гарантирование требований системы сертификации ISO 9001:2007.</p>
                            <p>В данный момент компания ПОДЕМКРАН ставит основной целью предоставление своим клиентам высококачественной надежной продукции. Специалисты технического отдела, основываясь на многолетним опыте, регулярно работают над качеством и усовершенствованием технологий выпускаемой продукции.</p>
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="http://tali.ru/wp-content/uploads/2013/07/podem.jpg" />
                            <button class="fb-btn"><a style="color:#fff; text-decoration: none" href="http://tst.tali.ru/contacts">Контакты <img src="http://tst.tali.ru/wp-content/themes/tali-template/img/phone.png"></a></button>
                        </div>
                        <div style="display: flex; justify-content: center" class="col-md-12">
                            <div class="col-md-4"><img class="img-responsive" src="http://tali.ru/wp-content/uploads/2013/07/podem_1.jpg"></div>
                            <div class="col-md-4"><img class="img-responsive" src="http://tali.ru/wp-content/uploads/2013/07/podem_2.jpg"></div>
                            <div class="col-md-4"><img class="img-responsive" src="http://tali.ru/wp-content/uploads/2013/07/podem_3.jpg"></div>

                        </div>
                        <div class="col-md-12 hidden-xs hidden-sm">
                            <h3 align="center">Тали электрические канатные производства ПОДЕМКРАН (PODEMCRANE) с нормальной строительной высотой</h3>
                            <table class="trest">
                                <tbody>
                                <tr>
                                    <th class="thead">
                                        <p>Грузоподъемность, тонн</p>
                                    </th>
                                    <th class="thead">
                                        <p>Высота подъема</p>
                                    </th>
                                    <th class="thead">
                                        <p>Тип</p>
                                    </th>
                                    <th class="thead">
                                        <p>Полиспаст</p>
                                    </th>
                                    <th class="thead">
                                        <p>Скорость подъема</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td rowspan="3">
                                        <p>1,0</p>
                                    </td>
                                    <td class="zeb">
                                        <p>10</p>
                                    </td>
                                    <td class="zeb">
                                        <p>20MT305</p>
                                    </td>
                                    <td class="zeb">
                                        <p>2/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p>8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>14</p>
                                    </td>
                                    <td>
                                        <p>53MT305</p>
                                    </td>
                                    <td>
                                        <p>2/1</p>
                                    </td>
                                    <td>
                                        <p>8/2,5</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p>20</p>
                                    </td>
                                    <td class="zeb">
                                        <p>53MT305</p>
                                    </td>
                                    <td class="zeb">
                                        <p>2/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p>8/235</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="4">
                                        <p>2,0</span></p>
                                    </td>
                                    <td>
                                        <p>10</p>
                                    </td>
                                    <td>
                                        <p>20MT310</p>
                                    </td>
                                    <td>
                                        <p>2/1</p>
                                    </td>
                                    <td>
                                        <p>8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p>14</p>
                                    </td>
                                    <td class="zeb">
                                        <p>20MT310</p>
                                    </td>
                                    <td class="zeb">
                                        <p>2/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p>8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>14</p>
                                    </td>
                                    <td>
                                        <p>53MT310</p>
                                    </td>
                                    <td>
                                        <p>2/1</p>
                                    </td>
                                    <td>
                                        <p>8/2,5</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p>20</p>
                                    </td>
                                    <td class="zeb">
                                        <p>53MT310</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">2/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">8/2,5</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3">
                                        <p align="center"><span size="2" style="font-size: small;">3,2</span></p>
                                    </td>
                                    <td>
                                        <p align="center">10</p>
                                    </td>
                                    <td>
                                        <p align="center">53MT316</p>
                                    </td>
                                    <td>
                                        <p align="center">2/1</p>
                                    </td>
                                    <td>
                                        <p align="center">8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p align="center">10</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">20MT316</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">2/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p align="center">14</p>
                                    </td>
                                    <td>
                                        <p align="center">20MT316</p>
                                    </td>
                                    <td>
                                        <p align="center">2/1</p>
                                    </td>
                                    <td>
                                        <p align="center">8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="6">
                                        <p align="center"><span size="2" style="font-size: small;">5,0</span></p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">7</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">20MT312</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p align="center">10</p>
                                    </td>
                                    <td>
                                        <p align="center">53MT312</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1,25</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p align="center">13</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">53MT312</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1,25</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p align="center">13</p>
                                    </td>
                                    <td>
                                        <p align="center">20MT312</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1</p>
                                    </td>
                                    <td>
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p align="center">10</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">53MT525</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">2/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">8/2,5</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p align="center">10</p>
                                    </td>
                                    <td>
                                        <p align="center">20MT525</p>
                                    </td>
                                    <td>
                                        <p align="center">2/1</p>
                                    </td>
                                    <td>
                                        <p align="center">8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3">
                                        <p align="center"><span size="2" style="font-size: small;">6,3</span></p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">7</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">20MT316</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p align="center">13</p>
                                    </td>
                                    <td>
                                        <p align="center">20MT316</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1</p>
                                    </td>
                                    <td>
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p align="center">13</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">20MT316</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="5">
                                        <p align="center"><span size="2" style="font-size: small;">10,0</span></p>
                                    </td>
                                    <td>
                                        <p align="center">7</p>
                                    </td>
                                    <td>
                                        <p align="center">20MT525</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1</p>
                                    </td>
                                    <td>
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p align="center">10</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">20MT525</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p align="center">13</p>
                                    </td>
                                    <td>
                                        <p align="center">20MT525</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1</p>
                                    </td>
                                    <td>
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="zeb">
                                        <p align="center">10</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">53MT525</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p align="center">13</p>
                                    </td>
                                    <td>
                                        <p align="center">53MT525</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1</p>
                                    </td>
                                    <td>
                                        <p align="center">4/1</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <h3 class="text-center">Тали электрические канатные производства ПОДЕМКРАН (PODEMCRANE) с уменьшенной строительной высотой</h3>
                            <table align="center" class="trest text-center table-striped">
                                <tbody>
                                <tr>
                                    <th class="thead">
                                        <p>Грузоподъемность, тонн</p>
                                    </th>
                                    <th class="thead">
                                        <p>Высота подъема</p>
                                    </th>
                                    <th class="thead">
                                        <p>Тип</p>
                                    </th>
                                    <th class="thead">
                                        <p>Полиспаст</p>
                                    </th>
                                    <th class="thead">
                                        <p>Скорость подъема</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <p>3,2</p>
                                    </td>
                                    <td>
                                        <p>10</p>
                                    </td>
                                    <td>
                                        <p>20MT316</p>
                                    </td>
                                    <td>
                                        <p>2/1</p>
                                    </td>
                                    <td>
                                        <p>8</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">
                                        <p>5,0</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">7</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">20MT312</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p align="center">4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>7</p>
                                    </td>
                                    <td>
                                        <p>20MT312</p>
                                    </td>
                                    <td>
                                        <p>4/1</p>
                                    </td>
                                    <td>
                                        <p>4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>10,0</p>
                                    </td>
                                    <td class="zeb">
                                        <p>7</p>
                                    </td>
                                    <td class="zeb">
                                        <p>53MT525</p>
                                    </td>
                                    <td class="zeb">
                                        <p>4/1</p>
                                    </td>
                                    <td class="zeb">
                                        <p>4</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
			</div>

			
	</div>
	

<?php get_footer(); // подключаем footer.php ?>