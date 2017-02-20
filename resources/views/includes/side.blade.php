<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">MAP </span> Chart</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li {{ Request::is('admin') ? 'class=active' : '' }}>
        <a href="">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
        </li>
      <li class="{{ Request::is('admin/title*') ? 'dropdown active' : 'dropdown' }}" >
        <a href="{{ route('admin.title.index') }}">
          <div class="icon">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
          </div>
          <div class="title">Chart</div>
        </a>
      </li>
      </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside>