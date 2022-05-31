@extends('Frontend.layouts.app')

@section('content')

<div id="product-post">
    <div class="container">
        <div id="single-blog" class="page-section first-section">
            <div class="container">
                <div class="row">
                    <div class="product-item col-md-12">
                        <div class="row">
                            <div class="col-md-8">  
                                    <div class="image">
                                        <div class="image-post">
                                            <img src="/images-details/single-post.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title"><br>
                                            <h3>ANOTHER MORNING BREAKFAST</h3>
                                            <span class="subtitle">4 comments</span>
                                        </div>
                                        <p>Single blog post page is here for you. You can use this grill <a href="#">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href="#">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>
                                        Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href="#">commodo</a> sapien.</p>
                                    </div>
                                    <div class="divide-line">
                                    <img src="/images-details/div-line.png" alt="" />
                                    </div>
                                    <div class="comments-title">
                                        <div class="comment-section">
                                            <h4>4 comments</h4>
                                        </div>
                                    </div>
                                    <div class="all-comments">
                                        <div class="view-comments">
                                            <div class="comments">
                                                <div class="author-thumb">
                                                    <img src="/images-details/author-comment1.jpg" style=" border-radius: 50%;" alt="">
                                                </div>
                                                <div class="comment-body">
                                                    <h6>Cindy Venna</h6>
                                                    <span class="date">11 Sep 2084 - 12:25 PM</span>
                                                    <a href="#" class="hidden-xs">Reply</a>
                                                    <p>Nulla ac elementum nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Donec rhoncus quam sit amet sodales finibus. Donec pellentesque non massa eu maximus. In non tellus id sem tempor gravida.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view-comments">
                                            <div class="comments">
                                                <div class="author-thumb">
                                                    <img src="/images-details/author-comment3.jpg" style=" border-radius: 50%;" alt="">
                                                </div>
                                                <div class="comment-body">
                                                    <h6>Brooker Aung</h6>
                                                    <span class="date">12 Sep 2084 - 10:40 AM</span>
                                                    <a href="#" class="hidden-xs">Reply</a>
                                                    <p>Duis rutrum, libero eu blandit gravida, massa orci cursus nisi, vehicula facilisis purus neque dignissim urna. Etiam molestie elementum elit at tempus. Suspendisse quis consectetur nisi, vitae consequat sem. In et quam id libero venenatis venenatis. Morbi vitae justo vulputate, auctor augue eu, pulvinar augue.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divide-line">
                                    <img src="/images-details/div-line.png" alt="" />
                                    </div>
                                <div class="leave-comment">
                                    <div class="leave-one">
                                        <h4>Leave a comment</h4>
                                    </div>
                                </div>
                                <div class="leave-form">
                                    <form action="#" method="post" class="leave-comment">
                                        <div class="row">
                                        <div class="name col-md-4">
                                            <input type="text" name="name" id="name" placeholder="Name" />
                                        </div>
                                        <div class="email col-md-4">
                                            <input type="text" name="email" id="email" placeholder="Email" />
                                        </div>
                                        <div class="subject col-md-4">
                                            <input type="text" name="subject" id="subject" placeholder="Subject" />
                                        </div>
                                        </div>
                                        <div class="row">        
                                            <div class="text col-md-12">
                                                <textarea name="text" placeholder="Comment"></textarea>
                                            </div>   
                                        </div>                              
                                        <div class="send">
                                            <button type="submit">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <div class="side-bar">
                                    <div class="news-letters">
                                        <h4>Archives</h4>
                                        <div class="archives-list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>July (12)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>August (18)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>September (72)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>October (63)</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>November (48))</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>December (24)</a></li>
                                            </ul>
                                        </div>        
                                    </div>
                                    <div class="recent-post">
                                        <h4>Recent Posts</h4>
                                        <div class="posts">
                                            <div class="recent-post">
                                                <div class="recent-post-thumb">
                                                    <img src="/images-details/recent-post1.jpg" alt="">
                                                </div>
                                                <div class="recent-post-info">
                                                    <h6><a href="#">Vestibulum molestie odio sit amet</a></h6>
                                                    <span>24 Sep 2084</span>
                                                </div>
                                            </div>
                                            <div class="recent-post">
                                                <div class="recent-post-thumb">
                                                    <img src="/images-details/recent-post2.jpg" alt="">
                                                </div>
                                                <div class="recent-post-info">
                                                    <h6><a href="#">Vivamus mattis quam eget urna tincidunt</a></h6>
                                                    <span>22 Sep 2084</span>
                                                </div>
                                            </div> 
                                            <div class="recent-post">
                                                <div class="recent-post-thumb">
                                                    <img src="/images-details/recent-post3.jpg" alt="">
                                                </div>
                                                <div class="recent-post-info">
                                                    <h6><a href="#">Curabitur in nunc eget neque posuere</a></h6>
                                                    <span>21 Sep 2084</span>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>   
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</div>


@endsection