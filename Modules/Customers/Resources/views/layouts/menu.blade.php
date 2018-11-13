                            <li class="{{ request()->is('customers') ? 'open' : '' }}">
                                <a class="nav-submenu " data-toggle="nav-submenu" href="javascript:void(0)"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Clientes</span></a>
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Listar Clientes</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('customers/criate') ? 'active' : '' }}" href="http://www.os.elyder.desv">Criar</a>
                                    </li>
                                </ul>
                            </li>