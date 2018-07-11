<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?=base_url('/');?>">UnaSUS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li class=""><a href="#">Equipamentos</a></li> -->
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"></span> Equipamentos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url('equipamento');?>">Listar Equipamentos</a></li>
            <li><a href="<?=base_url('equipamento/add');?>">Adicionar Equipamentos</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"></span> Cargos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url('cargo');?>">Listar Cargos</a></li>
            <li><a href="<?=base_url('cargo/add');?>">Adicionar Cargos</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"></span> Funcionários<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url('funcionario');?>">Listar Funcionários</a></li>
            <li><a href="<?=base_url('cargo/add');?>">Adicionar Funcionários</a></li>
          </ul>
        </li>

         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"></span> Emprestimos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url('emprestimo');?>">Listar Emprestimos</a></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id="link-user">
          <a href="#"><span class="glyphicon glyphicon-user"></span> 
          <?php 
          if (isset($_SESSION['usuario'][0]->loginUsuario)) {
            echo $_SESSION['usuario'][0]->loginUsuario;
          }
          ?>
        </a></li>
        <li id="link-user"><a href="<?=site_url('Logount')?>"><span class="glyphicon glyphicon-log-in"></span> Logount</a></li>
      </ul>
    </div>
  </div>
</nav>