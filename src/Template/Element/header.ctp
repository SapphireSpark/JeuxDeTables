<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Jeux de Tables</a>
            <!--</div>
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
            <ul class="nav navbar-nav">
                <li>
                    <?= $this->Html->link(__('Apropos'), ['controller' => 'Apropos', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Resources'), ['controller' => 'Resources', 'action' => 'index']) ?>
                </li>
                <li>
                    <?php
                    $loguser = $this->request->session()->read('Auth.User');
                    if ($loguser) {
                        $user = $loguser['username'];
                        echo $this->Html->link($user . ' logout', ['controller' => 'Users', 'action' => 'logout']);
                    } else {
                        echo $this->Html->link('login', ['controller' => 'Users', 'action' => 'login']);
                    }
                    ?>
                </li> 
                <li><?=
                    $this->Html->link('Listes dynamiques avec AngularJS (action Edit)', [
                        'controller' => 'Resources',
                        'action' => 'editLast'
                    ]);
                    ?>
                </li>
                <li><?=
                    $this->Html->link('API CRUD avec AngularJS et login JWT', [
                        'controller' => 'subcategories',
                        'action' => 'index'
                    ]);
                    ?>
                </li>

            </ul>
        </div>
    </div>
</nav>


