@extends('client.layout.shared')

@section('title','Contact Us Page')
@section('content')
    


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--contact map start-->
    <div class="contact_map mt-60">
       <div class="map-area">
        <iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863981044336!2d105.74459841473154!3d21.038127785993204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1659001498407!5m2!1svi!2s"></iframe>
       
       </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>contact us</h3>    
                         <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : No 40 Baria Sreet 133/2 NewYork City</li>
                            <li><i class="fa fa-phone"></i> <a href="#">Infor@roadthemes.com</a></li>
                            <li><i class="fa fa-envelope-o"></i> 0(1234) 567 890</li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message form">
                        <h3>Tell us your project</h3>   
                        <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                            <p>  
                               <label> Your Name (required)</label>
                                <input name="con_name" placeholder="Name *" type="text"> 
                            </p>
                            <p>       
                               <label>  Your Email (required)</label>
                                <input name="con_email" placeholder="Email *" type="email">
                            </p>
                            <p>          
                               <label>  Subject</label>
                                <input name="con_subject" placeholder="Subject *" type="text">
                            </p>    
                            <div class="contact_textarea">
                                <label>  Your Message</label>
                                <textarea placeholder="Message *" name="con_message"  class="form-control2" ></textarea>     
                            </div>   
                            <button type="submit"> Send</button>  
                            <p class="form-message mt-2"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->

@endsection


