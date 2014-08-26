<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" data-replace-tmp-key="7adea0d9c77aabccd8bb67ae0a832d59"><os-p key="7adea0d9c77aabccd8bb67ae0a832d59">Larabook</os-p></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" data-replace-tmp-key="8cf04a9734132302f96da8e113e80ce5"><os-p key="8cf04a9734132302f96da8e113e80ce5">One</os-p></a></li>
        <li><a href="#about" data-replace-tmp-key="8f7f4c1ce7a4f933663d10543562b096"><os-p key="8f7f4c1ce7a4f933663d10543562b096">two</os-p></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if ($currentUser)
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-replace-tmp-key="6be2458a7786d2dfdb6b72d7583e8104"><os-p key="6be2458a7786d2dfdb6b72d7583e8104">{{ $currentUser->username }}<span class="caret"></span></os-p></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" data-replace-tmp-key="004bf6c9a40003140292e97330236c53"><os-p key="004bf6c9a40003140292e97330236c53">Acción</os-p></a></li>
              <li><a href="#" data-replace-tmp-key="c396653502927eea9f0fc260a1465518"><os-p key="c396653502927eea9f0fc260a1465518">Otra acción</os-p></a></li>
              <li><a href="#" data-replace-tmp-key="71e7f655e2bbd0d97e8c376a4ed5af03"><os-p key="71e7f655e2bbd0d97e8c376a4ed5af03">Algo más aquí</os-p></a></li>
              <li class="divider"></li>
              <li class="dropdown-header" data-replace-tmp-key="98b396110915919be9b53f0c37aaafda"><os-p key="98b396110915919be9b53f0c37aaafda">Nav header</os-p></li>
              <li><a href="#" data-replace-tmp-key="112cd6710bd31b37dd32719c2d37191e"><os-p key="112cd6710bd31b37dd32719c2d37191e">Enlace separado</os-p></a></li>
              <li><a href="#" data-replace-tmp-key="0006e15256c2d7dba40f61bd9956ec60"><os-p key="0006e15256c2d7dba40f61bd9956ec60">Un enlace más separado</os-p></a></li>
            </ul>
          </li>
        @else
          <li>{{ link_to('login', 'Login')}}</li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>