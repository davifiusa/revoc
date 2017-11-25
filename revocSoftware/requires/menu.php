<!-- Logo -->
<div id="header">
  <h1>Revoc Tecnologia</a></h1>
</div>

<!-- Menu Top-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages">
      <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
        <i class="icon icon-user"></i>  <span class="text">Bem-vindo User</span><b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li><a href="#"> <i class="icon-user"></i> Meu perfil </a> </li>
        <li class="divider"> </li>
        <li><a href="#"><i class="icon-check"></i> </a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Sair </a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Sair</span></a></li>
  </ul>
</div>

<!--Busca geral no sistema -->
<div id="search">
  <input type="text" placeholder="Buscar ..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>

<!-- Menu Lateral -->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Inicío</a>
  <ul>
    <li class="active"><a href="<?=$linkHome?>"><i class="icon icon-home"></i> <span>Inicío</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Cadastros</span> <span class="label label-inverse">4</span></a>
      <ul>
        <li><a href="<?=$linkClientes?>">Clientes</a></li>
        <li><a href="<?=$linkFornecedores?>">Fornecedores</a></li>
        <li><a href="<?=$linkCategoriaFornecedores?>">Categoria Fornecedores</a></li>
        <li><a href="form-wizard.html">Produtos</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Movimentações</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Compras</a></li>
        <li><a href="form-common.html">Entradas</a></li>
        <li><a href="form-validation.html">Inventários</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-money"></i> <span>Vendas</span></a></li>
    <li><a href="buttons.html"><i class="icon icon-bar-chart"></i> <span>Relatórios</span></a></li>
    <li><a href="buttons.html"><i class="icon icon-cog"></i> <span>Configurações</span></a></li>

    <li class="content"> <span>Metas de Venda Agosto</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat"> 2.141,94 / 3.000,00 R$</div>
    </li>
    <li class="content"> <span>Metas de Lucro Agosto</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604,44 / 1.000,00 R$</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->
