<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>VK.CRM</title>
        <link href="assets/sbadmin/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/sbadmin/css/sb-admin.css" rel="stylesheet">
        <link href="assets/sbadmin/css/plugins/morris.css" rel="stylesheet">
        <link href="assets/sbadmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="assets/css/bootstrap-chosen.css" rel="stylesheet" type="text/css"/>
        <script src="assets/sbadmin/js/jquery.js"></script>
        <script src="assets/js/chosen.jquery.js" type="text/javascript"></script>
        <script src="assets/sbadmin/js/bootstrap.min.js"></script>
        <script>
            $(function () {
                $('.chosen-select').chosen();
                $('.chosen-select-deselect').chosen({allow_single_deselect: true});
            });
        </script>
    </head>  
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">VK.CRM</a>
                </div>

                <ul class="nav navbar-right top-nav">  
                    
                    <? //if ($this->config->item('type_inst') == 'demo' or $this->config->item('type_inst') == 'multi'): ?>
                        <li>
                            <a href="/user/history">На балансе <b> <?//= $this->lib->get_user_balance($this->user->id) ?></b> лидов</a>
                        </li>
                    <? //endif; ?>
                        
                    <li>
                        <a href="/auth/logout"><i class="fa fa-fw  fa-power-off"></i> Выход </a>
                    </li>       
                </ul>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                   
                        <li <? //if ($this->uri->segment('2') == 'stat') echo 'class="active"' ?>>
                            <a href="/user/stat"><i class="fa  fa-fw fa-users"></i> База лидов</a>
                        </li>
                      
                        <li <? //if ($this->uri->segment('2') == 'code') echo 'class="active"' ?>>
                            <a href="/user/code"><i class="fa fa-fw fa-desktop"></i> Подключить сайты</a>
                        </li>

                        <? //if ($this->config->item('type_inst') == 'multi'): ?>
                            <li  <?// if ($this->uri->segment('2') == 'payment') echo 'class="active"' ?>>
                                <a href="/user/payment"><i class="fa  fa-fw fa-money"></i> Платежи</a>
                            </li>

                            <li  <? //if ($this->uri->segment('2') == 'order') echo 'class="active"' ?>>
                                <a href="/user/order"><i class="fa fa-fw fa-shopping-cart"></i> Купить лидов</a>
                            </li>

                            <li  <? //if ($this->uri->segment('2') == 'history') echo 'class="active"' ?>>
                                <a href="/user/history"><i class="fa fa-fw fa-history"></i>  История лидов</a>
                            </li>
                        <? //endif; ?>

                        <li  <? //if ($this->uri->segment('2') == 'profile') echo 'class="active"' ?>>
                            <a href="/user/profile"><i class="fa fa-fw fa-user"></i>  Профиль пользователя</a>
                        </li>
                        
                    </ul>
                    
                    
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <? //if (isset($content)) echo $content; ?>
                        
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                База лидов
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> Главная
                                </li>
                                <li>
                                    База лидов
                                </li>
                            </ol>
                        </div>
                        
                        <div class="col-lg-4">
                            <form id="form_site" action="/user/stat/" method="get">
                                <select id="site_select"  data-placeholder="Фильтр по сайтам" name="site" class="chosen-select-deselect"  tabindex="-1">
                                    <option <? //if (!$this->input->get('site')) echo 'selected="selected"'; ?> value="">По всем сайтам</option>
                                    <? //if ($site->num_rows() > 0): ?>
                                        <? //foreach ($site->result() as $s): ?>
                                            <option <? //if ($this->input->get('site') == $s->site) echo 'selected="selected"'; ?> value="<?= $s->site ?>"><?= $s->site ?></option>
                                        <? ///endforeach; ?>      
                                    <? //endif; ?>      
                                </select>
                            </form>
                        </div>
                        
                        
                        
                        <div class="col-lg-12">
                            <table class="table table-bordered table-condensed   table-striped table-hover" style="margin-top: 15px;  ">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Дата</th>
                                        <th>Сайт</th>
                                        <th>Пользователь VK</th>
                                        <th>Имя</th>
                                        <th>Пол</th>
                                        <th>Город (VK)</th>
                                        <th>Страна (VK)</th>
                                        <th>Рефер</th>
                                        <th>Страна по IP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>                           
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
