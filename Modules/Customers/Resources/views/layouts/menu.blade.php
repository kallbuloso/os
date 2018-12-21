                            {{--  <li class="{{ request()->is('customers*') ? 'open' : '' }}">  --}}
                            <li class="@activeIfUrl('customers*','open')">
                                <a class="nav-submenu " data-toggle="nav-submenu" href="javascript:void(0)">@iconsi('wrench')<span class="sidebar-mini-hide">Clientes</span></a>
                                <ul>
                                    <li>
                                        <a class="@activeIfUrl('customers','active')" href="@route('customers')">Listar Clientes</a>
                                        {{--  <a class="{{ request()->is('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Listar Clientes</a>  --}}
                                    </li>
                                    <li>
                                        <a class="@activeIfUrl('customers/create','active')" href="@route('createCustomer')">Criar</a>
                                    </li>
                                </ul>
                            
                            </li>
                            
{{--  activeIfRoute
openIfRoute  --}}