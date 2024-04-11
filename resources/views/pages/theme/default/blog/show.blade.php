@extends('layout.theme.master')
@section('content')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">Tips for Protecting Your Car</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="demo-auto-services.html" class="text-color-default text-color-hover-primary text-decoration-none">HOME</a></li>
                    <li class="active">BLOG</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container pt-4 pb-5 my-5">
    <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

            <article>
                <div class="card border-0">
                    <div class="card-body z-index-1 p-0">
                        <p class="text-uppercase text-1 mb-3 text-color-default"><time pubdate datetime="2023-01-10">10 Jan 2023</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>

                        <div class="post-image pb-4">
                            <img class="card-img-top custom-border-radius-1" src="{{asset('theme/default/img/demos/auto-services/blog/blog-2.jpg')}}" alt="Card Image">
                        </div>

                        <div class="card-body p-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
                            <p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                            <p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>

                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>

                            <hr class="my-5">

                            <div class="post-block post-author">
                                <h3 class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3">Author</h3>
                                <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                    <a href="blog-post.html">
                                        <img src="{{asset('theme/default/img/avatars/avatar.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                </div>
                                <p><strong class="name"><a href="#" class="text-4 text-dark pb-2 pt-2 d-block">John Doe</a></strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
                            </div>

                            <hr class="my-5">

                            <div id="comments" class="post-block post-comments">
                                <h3 class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3">3 comments for "An Interview with John Doe"</h3>

                                <ul class="comments">
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="{{asset('theme/default/img/avatars/avatar-2.jpg')}}">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong class="text-dark">John Doe</strong>
                                                    <span class="float-end">
                                                        <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                    </span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                            </div>
                                        </div>

                                        <ul class="comments reply">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar rounded-circle" alt="" src="{{asset('theme/default/img/avatars/avatar-3.jpg')}}">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong class="text-dark">John Doe</strong>
                                                            <span class="float-end">
                                                                <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar rounded-circle" alt="" src="{{asset('theme/default/img/avatars/avatar-4.jpg')}}">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong class="text-dark">John Doe</strong>
                                                            <span class="float-end">
                                                                <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="{{asset('theme/default/img/avatars/avatar.jpg')}}">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong class="text-dark">John Doe</strong>
                                                    <span class="float-end">
                                                        <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                    </span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="{{asset('theme/default/img/avatars/avatar.jpg')}}">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong class="text-dark">John Doe</strong>
                                                    <span class="float-end">
                                                        <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                    </span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <h3 class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3 mt-5">Leave a Reply</h3>

                                <form class="custom-form-simple-validation p-4 rounded bg-color-grey" action="/" method="POST">
                                    <div class="p-2">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="form-label required mb-1 font-weight-bold text-dark">Full Name</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-3 px-3 border-0 box-shadow-none" name="name" id="name" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="form-label required mb-1 font-weight-bold text-dark">Email Address</label>
                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-3 px-3 border-0 box-shadow-none" name="email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label class="form-label required mb-1 font-weight-bold text-dark">Comment</label>
                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control p-3 border-0 box-shadow-none" name="message" id="message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col mb-0">
                                                <input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </article>

        </div>
        <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
            <aside class="sidebar">
                <div class="px-3 mb-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About The Blog</h3>
                    <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo, volutpat quis porta diam.</p>
                </div>
                <div class="py-1 clearfix">
                    <hr class="my-2">
                </div>
                <div class="px-3 mt-4">
                    <form action="page-search-results.html" method="get">
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="s" id="s" type="text">
                            <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
                        </div>
                    </form>
                </div>
                <div class="py-1 clearfix">
                    <hr class="my-2">
                </div>
                <div class="px-3 mt-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>
                    <div class="pb-2 mb-1">
                        <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                        <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>
                        <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                        <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>
                        <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                        <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>
                    </div>
                </div>
                <div class="py-1 clearfix">
                    <hr class="my-2">
                </div>
                <div class="px-3 mt-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Comments</h3>
                    <div class="pb-2 mb-1">
                        <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Vivamus sollicitudin</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                        <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John Doe on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum dolor</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                        <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Consectetur adipiscing</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                    </div>
                </div>
                <div class="py-1 clearfix">
                    <hr class="my-2">
                </div>
                <div class="px-3 mt-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories</h3>
                    <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design (2)</a></li>
                        <li class="nav-item">
                            <a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Animals</a></li>
                                <li class="nav-item"><a class="nav-link bg-transparent border-0 active" href="#">Business</a></li>
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Sports</a></li>
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">People</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos (3)</a></li>
                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle (2)</a></li>
                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology (1)</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
