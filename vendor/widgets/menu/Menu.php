<?php


namespace vendor\widgets\menu;

use R;
use vendor\libs\Cache;

class Menu
{
    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl = __DIR__ . '/views/menu.php';
    protected $container = 'ul';
    protected $class = 'nav navbar-nav';
    protected $table = 'categories';
    protected $cache = 60;
    protected $cacheKey = 'menu';

    public function __construct($options = [])
    {
        $this->getOptions($options);
        $this->run();
    }

    protected function output()
    {
        echo "<{$this->container} class='{$this->class}'>" ;
        echo $this->menuHtml;
        echo "</{$this->container}>";
    }

    protected function run()
    {
       // CACHE
        /*$cache = new Cache();
        $this->data = $cache->get($this->cacheKey);
        if(!$this->data)
        {
            $this->data = R::getAssoc("SELECT * FROM $this->table");
            $cache->set($this->cacheKey, $this->data, $this->cache);  // default 1h
        }*/

        $this->data = R::getAssoc("SELECT * FROM $this->table");
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        $this->output();
    }

    protected function getOptions($options)
    {
        foreach($options as $k => $v)
        {
            if(property_exists($this, $k))
            {
                $this->$k = $v;
            }
        }
    }

    protected function  getTree()
    {
        $tree = [];
        $data = $this->data;

        foreach($data as $id=>&$node)
        {
            if(!$node['parent'])
            {
                $tree[$id] = &$node;
            }
            else
            {
                $data[$node['parent']]['childs'][$id] = &$node;
            }
        }

        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '')
    {
        $menu = '';
        foreach($tree as $id => $category)
        {
            $menu .= $this->catToTemplate($category, $tab, $id);
        }
        return $menu;
    }

    protected function catToTemplate($category, $tab, $id)
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }

}