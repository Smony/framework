
# ---------ИНСТРУКЦИЯ ПО РАБОТЕ С ФРЕЙМВОРКОМ--------- #

`dd();` - Удобная для чтения альтернатива print_r();

### ---Настройки БД--- ###

`/config/config_db.php`

### ---Создание контроллера(CONTROLLERS)--- ###

- создаем контроллер в /app/controllers/ и наследуем его от класса AppController. Например: `class NameController extends AppController{}`
- экшны создаются по типу `public function indexAction(){}`
- ПЕРЕДАЧА ДАННЫХ с экшна в вид осуществляется с помощью функции `set()` базового контроллера. Например: `$this->set(['citys'=>$var, 'users'=>$var2]);` где citys и users это массивы которые передаются в вид, а `$var1` и `$var2` это данные которые следует передать

### ---Виды(VIEWS)--- ###

В видах пишем html код).

### ---Шаблоны(LAYOUTS)--- ###

- шаблоны хранятся в `/app/views/layouts/`
- в классе контроллера для всех экшнов или для экшна отдельно можем указать имя шаблона, если требуется(по дефолту стоит bootstrap). Например: `public $layout = 'nameTemplate';` - для всех видов и `$this->layout = nameTemplate` - для отдельного вида
- так же можем запретить использование шаблона в классе или в конткретном экшне. `$this->layout = false;`


### ---Работа с БД(DATABASE) | Модели(MODELS)--- ###

- создаем модель в /app/models/ и наследуем ее от базового класса Model. Например: `class ClassName extends Model{}`
- в классе указываем с какой таблицей будет работать данная модель. Например: `public $table = 'tableName';`
- также в классе можем указать по какому полю таблицы будет искать метод findOne()(по дефолту ищет по полю id). Например: `public $pk = 'name';`

Для работы с моделью, в котроллере нужно создать 'экземпляр обьекта модели. Например: `$model = new Model;`

Для работы с БД используется RedBeanPHP!!!

Стандартные методы класса Model:

- `query($sql);` возвращает true если запрос выполняется, и false если нет. Например: `$var = $model->query("SELECT * FROM city WHERE id=?", ['5']);`
- `findAll();`  возвращает массив данных из таблицы. Например: `$var = $model->findAll();`
- `findOne($id, $field = '');` возвращает одну запись из таблицы
- `findBySql($sql, $params = []);` метод для выполнения произольного запроса
- `findLike($str, $field, $table = '');` метод для поиска по сторке, $str-что ищем $field-в каком поле $table-в какой таблице

### ---RedBeansPHP--- ###

`R::setup('mysql:host=localhost;dbname=nameDB','user','password');` //подключени к БД  

`var_dump(R::testConnection());` //проверка подключения  
`R::freeze(true);`  //true запрещает изменять структуру БД(включать на продакшене)  
`R::fancyDebug(TRUE);` // выводит выполненый запрос  

#### Create ####
`$var = R::dispense('category');` //создаем обьект(таблицу)  
`$var->user = 'userName';`  //задаем значение полю user  
`$var->password = 'PaSsWoRd';`  //задаем значение полю password  
`$var->email = 'email';`  //задаем значение полю email  
`$id = R::store($var);`  //сохраняем обьект в БД  

#### Read ####
`$var = R::load('category', 1);`  //выбираем значение из обьекта с id=1  
`echo $var['title'];`  //или $cat->title  //и выводим значение title этого обьекта  

#### Update ####
`$var = R::load('category', 1);`  //выбираем значение  
`$var->title = 'Категория 3';`  //обновляем его  
`R::store($cat);`  //сохраняем изменения  

#### Delete ####
`$var = R::load('category', 2);`  //выбираем значение c id=2  
`R::trash($var);`  //и удаляем его  
//или  
`R::wipe('category');` //удаление всех записей из таблицы  

#### findAll ####
`$vars = R::findAll('tableName');`  //получаем все записи из таблицы  
`$vars = R::findAll('tableName', 'id > ?',['2']);`  //получаем все записи из таблицы где id  больше 2  
//или  
`$cats = R::findAll('tableName', 'title LIKE ?',['%catego%']);` //получаем все записи из таблицы где в поле title есть catego  

#### findOne ####
`$var = R::findOne('tableName', 'id=2');`  //получаем одну запись  

### ---CACHE--- ###

Для работы с кэшем используется следующая конструкция:

- записываем в кэш: 
 ```php
    $var = App::$app->cache->get('cacheName');           //проверяем кэш,  
    if(!$var)                                            //и если такого кэша нет,  
    {  
        $var = $someData;                                //тогда мы записываем данные  
        App::$app->cache->set('cacheName' $var, 7200);   //и помещаем их в кэш  
    }
```
- удаление файла с кэшем:
`App::$app->cache->delete('cacheName');`

### ---AJAX--- ###

  Пример:
- пишем запрос

```javascript
<script>
    $('#btn').click(function () {
        $.ajax({
            url: '/main/index',
            type: 'post',
            data: {'id' : 2},
            success: function (res) {
                $('body').html(res);
            },
            error: function () {
                alert('ERROR');
            }
        })
    })
</script> 
```

- обрабатываем запрос в контроллере и возвращаем

`if($this->isAjax())`   //проверяем ассинхронно ли к нам пришли данные
`{`
`$model = new Main;` //подключаем модель с которой работаем(если нужно)
`$data = R::findOne('city', "WHERE id={$_POST['id']}");` //получаем данные
`$this->loadView('nameView', ['city'=>$data]);` //с помощью метода `loadView()` передаем в вид 'nameView' данные, формируем их в нужном нам стиле, и возвращаем. Если возвращаемых данных не много, то можно просто их вернуть так: `echo $data`
`die;`
`}`

### ---META--- ###

`<?php \vendor\core\base\View::getMeta() ?>` //добавляем строку для вызова meta в шаблон  

`View::setMeta('title', 'description', 'keywords');` //задем meta в контроллере  


### ---MENU--- ###

Меню выводится из таблицы БД. Таблица строится таким образом: id,title - название пункта меню, parent - id родительског опункта(если пункт сам является родителем - то 0).

`use vendor\widgets\menu\Menu;`                                     //подключаем класс
Вызываем меню в нужном месте и задаем параметры:


`new \vendor\widgets\menu\Menu([`
    `'tpl' => ROOT . '/vendor/widgets/menu/menu_tpl/menu.php',`     //указываем путь к шаблону меню
    `'container' => 'ul',`                                          //устанавливаем тег-обертку
    `'class' => 'default',`                                         //указываем класс
    `'table' => 'categories',`                                      //указываем таблицу БД из которой построим меню
    `'cache' => 3600,`                                              //время кеширования
    `'cacheKey' => 'ul_menu',`                                      //ключ кеша
    `]);`

<h2><font>Лицензия</font></h2>
<p><font><font class="">Структура framework является открытым кодом программное обеспечение , </font><font class="">лицензированное под </font></font><a href="http://opensource.org/licenses/MIT"><font><font class="">лицензией MIT</font></font></a><font><font class=""> .</font></font></p>
