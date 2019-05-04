{{-- Side Navigation --}}
<div class="col-md-2">    
    <div class="sidebar content-box" style="display: block;">        
        <ul class="nav">            
            <!-- Main menu -->            
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>                    Dashboard</a></li>            

            <li class="submenu">                
                <a href="#">                    
                    <i class="glyphicon glyphicon-list"></i> Doctor                  
                    <span class="caret pull-right"></span>                
                </a>                

                <!-- Sub menu -->                
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('doctor.index')}}">Doctors</a></li>   
                    <li><a class="dropdown-item" href="{{route('doctor.create')}}">Add Doctor</a></li>
                </ul> 
            </li>

            <li class="submenu">                
                <a href="#">                    
                    <i class="glyphicon glyphicon-list"></i> Department              
                    <span class="caret pull-right"></span>                
                </a>                

                <!-- Sub menu -->                
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('department.index')}}">Departments</a></li>
                </ul> 
            </li>

            <li class="submenu">                
                <a href="#">                    
                    <i class="glyphicon glyphicon-list"></i> Service              
                    <span class="caret pull-right"></span>                
                </a>                

                <!-- Sub menu -->                
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('service.Hbook')}}">Health Books</a></li>
                    <li><a class="dropdown-item" href="{{route('service.Hliveprog')}}">Living Programs</a></li>
                    <li><a class="dropdown-item" href="{{route('service.Hsportmed')}}">Sport Medicine</a></li>
                    <li><a class="dropdown-item" href="{{route('service.healthLett')}}">Health Letters</a></li>
                    <li><a class="dropdown-item" href="{{route('service.addminresearch')}}">Research</a></li>
                </ul> 
            </li>
        </ul>               
    </div>
</div> 
<!-- ADMIN SIDE NAV-->