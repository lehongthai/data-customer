@extends('layouts.test')

@section('content')
<div class="contact-page">
           <div class="container">
             <div class="row hg-row">
                <div class="col-md-5 col-sm-5 col-xs-12 auto-height border-right">
                    <!--Left column-->
                    <div class="contact-left wow fadeInUp">
                        <div class="left-title wow fadeInUp">
                            <h3>Contact Us</h3>                            
                        </div>
                        <div class="contact-description wow fadeInUp">
                            224 ipsum dolor sit amet, Ward 22, District 1, HCMC, Vietnam
                        </div>
                        <div class="map-holder wow fadeInUp">
                            <div id="map"></div>
                        </div>
                        <div class="contact-details wow fadeInUp">
                        @if(array_key_exists(SlugConfigList::SLUG_MOBILE_PHONE, $listConfig))
                            <p>T: <?php
                                    echo  $listConfig[\SlugConfigList::SLUG_MOBILE_PHONE];
                                ?></p>
                        @endif
                        @if(array_key_exists(SlugConfigList::SLUG_FAX, $listConfig))
                            <p>F: <?php echo $listConfig[\SlugConfigList::SLUG_FAX] ?></p>
                        @endif
                        @if(array_key_exists(SlugConfigList::SLUG_CONTACT, $listConfig))
                            <p id="contact-email"><?php echo $listConfig[\SlugConfigList::SLUG_CONTACT] ?></p>
                        @endif
                        </div>
                        <div class="icon-list text-center wow fadeInUp">
                            <ul>
                            @if(array_key_exists(SlugConfigList::SLUG_LINK_LINKEDIN, $listConfig))
                                <li>
                                   <a href="<?php echo $listConfig[\SlugConfigList::SLUG_LINK_LINKEDIN] ?>">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                   </a>
                                </li>
                            @endif
                            @if(array_key_exists(SlugConfigList::SLUG_LINK_TWITTER, $listConfig))
                                <li>
                                   <a href="<?php echo $listConfig[\SlugConfigList::SLUG_LINK_TWITTER] ?>">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                   </a>
                                </li>
                            @endif
                            @if(array_key_exists(SlugConfigList::SLUG_LINK_FACEBOOK, $listConfig))
                                <li>
                                   <a href="<?php echo $listConfig[\SlugConfigList::SLUG_LINK_FACEBOOK] ?>">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                   </a>
                                </li>
                            @endif
                            @if(array_key_exists(SlugConfigList::SLUG_LINK_SKYPE,$listConfig))                                
                                <li>
                                   <a href="<?php echo $listConfig[\SlugConfigList::SLUG_LINK_SKYPE] ?>">
                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                   </a>
                                </li>
                            @endif
                            @if(array_key_exists(SlugConfigList::SLUG_LINK_GOOGLE_PLUG, $listConfig))
                                <li>
                                   <a href="<?php echo $listConfig[\SlugConfigList::SLUG_LINK_GOOGLE_PLUG] ?>">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                   </a>
                                </li>
                            @endif
                            @if(array_key_exists(SlugConfigList::SLUG_LINK_YOUTUBE, $listConfig))
                                <li>
                                   <a href="<?php echo $listConfig[\SlugConfigList::SLUG_LINK_YOUTUBE] ?>">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                   </a>
                                </li>
                            @endif
                            </ul>
                        </div>
                    </div>
                    <!--End Left column-->
                </div>

                <div class="col-md-6 col-md-push-1 col-sm-7 col-sm-push-0 col-xs-12 col-xs-push-0 auto-height">
                    <!--Right column-->
                    <div class="contact-right wow fadeInUp">
                        <div class="right-title wow fadeInUp">
                            <h3>Get In Touch</h3>
                        </div>    
                        <div class="contact-description wow fadeInUp">
                            For further information and inquiry, please fill in the form and you will receive the desired information without further obligations.                        
                        </div>
                        @if(Session::has('flash_message'))
                        <div class="row clearfix">
                          <div class="alert alert-{!! Session::get('level') !!}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Thông báo!</strong> {!! Session::get('flash_message') !!}
                          </div>
                        </div>
                        @endif  
                        <form action="{{route('contact.store') }}" id="user-form" method="POST">
                        {{ csrf_field() }}
                            <div class="form-container">
                                <div id="form-block1" class="wow fadeInUp">
                                  <input type="text" name="name" value="{{ old('name') }}" class="inputText" required/>
                                  <span class="floating-label">NAME</span>
                                  <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                                  <span style="color: red">{{ $errors->first('name') }}</span>
                                </div>
                                <div id="form-block2" class="wow fadeInUp">
                                  <input type="email" class="inputText" id="email" name="email" value="{{ old('email') }}" required/>
                                  <span class="floating-label">EMAIL</span>
                                  <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                                  <span style="color: red">{{ $errors->first('email') }}</span>                      
                                </div>
                                <div id= "form-block3" class="wow fadeInUp">
                                  <input type="text" name="subject" value="{{ old('subject') }}" class="inputText" required/>
                                  <span class="floating-label">SUBJECT</span>
                                  <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                                  <span style="color: red">{{ $errors->first('subject') }}</span>                           
                                </div>
                                <div id="form-block4" class="wow fadeInUp">
                                  <textarea rows="3" class="area-field" name="message" required>{{ old('message') }}</textarea>
                                  <span class="floating-label">MESSAGE</span>
                                  <span class="form-control-feedback glyphicon glyphicon-ok"></span>
                                  <span style="color: red">{{ $errors->first('message') }}</span>                       
                                </div>
                            </div>
                            <button type="submit" class="send-button pull-right wow fadeInUp">
                                SEND
                            </button>
                        </form>
                    </div>   
                    <!--End Right column-->
                </div>
            </div>
          </div>
        </div>
      <!--- END Page -->
@endsection