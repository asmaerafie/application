@extends('layouts.guest')

@section('content')

<div id="registerbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title"> Register </div>
                    
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="register-alert" class="alert alert-danger col-sm-12"></div>
                          <!--  -->  
                        <form id="registerform" class="form-horizontal" role="form" method="post" action="{{ route('register') }}"> 
                             
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="first_name" id="first_name" class="form-control " placeholder="First Name" placeholder="first_name">
                            
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="last_name" id="last_name" class="form-control " placeholder="Last Name" placeholder="last_name">
				
                            </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
                                        <input type="text" class="form-control" name="email" value="" placeholder="email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
				 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                 <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" >
				</div>
                            </div>
                          
                                <div style="margin-bottom:50px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        
                                        <button type="submit" class="btn btn-success"> Register  </button>

                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="padding-top:15px; font-size:85%" >
                                           You have an account! 
                                        <a href="{{route('login')}}" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign in Here
                                        </a>
                                        </div>
                                    </div>
                                </div>   
                    
                            </form>     

                        </div>                     
                    </div>  
        </div>
            <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"> Register </div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a href="#" onclick="$('#signinbox').hide(); $('#registerbox').show()"> Register </a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                 
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                        
                                    </div>
                                </div>
                                
                                
                            </form>
                    </div>
      
         </div> 
@endsection