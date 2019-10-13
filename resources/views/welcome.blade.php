@extends('layouts.app')

@section('content')

<div class="container cta-100 ">
  <div class="container">
    <div class="row blog">
      <div class="col-md-12">

          <!-- Carousel items -->
              <div class="row">
                <div class="col-sm-4 bg-info" >
                  <div class="item-box-blog">
                    <div class="item-box-blog-image">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg" class="w-50 h-50"> </figure>
                    </div>
                    <div class="item-box-blog-body">
                      <!--Heading-->
                      <div class="item-box-blog-heading">
                        <a href="#" tabindex="0">
                          <h5>{{ $posts[0]->title}}</h5>
                        </a>
                      </div>
                      <!--Data-->
                      <div class="item-box-blog-data" style="padding: px 15px;">
                        <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                      </div>
                      <!--Text-->
                      <div class="item-box-blog-text">
                        <p>{{ $posts[0]->body}}</p>
                      </div>
                      <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                      <!--Read More Button-->
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 bg-success" >
                  <div class="item-box-blog">
                    <div class="item-box-blog-image">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 02</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg" class="w-50 h-50"> </figure>
                    </div>
                    <div class="item-box-blog-body">
                      <!--Heading-->
                      <div class="item-box-blog-heading">
                        <a href="#" tabindex="0">
                          <h5>{{ $posts[1]->title}}</h5>
                        </a>
                      </div>
                      <!--Data-->
                      <div class="item-box-blog-data" style="padding: px 15px;">
                        <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                      </div>
                      <!--Text-->
                      <div class="item-box-blog-text">
                        <p>{{ $posts[1]->body}}</p>
                      </div>
                      <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                      <!--Read More Button-->
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 bg-primary" >
                  <div class="item-box-blog">
                    <div class="item-box-blog-image">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 03</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg" class="w-50 h-50"> </figure>
                    </div>
                    <div class="item-box-blog-body">
                      <!--Heading-->
                      <div class="item-box-blog-heading">
                        <a href="#" tabindex="0">
                          <h5>{{ $posts[2]->title}}</h5>
                        </a>
                      </div>
                      <!--Data-->
                      <div class="item-box-blog-data" style="padding: px 15px;">
                        <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                      </div>
                      <!--Text-->
                      <div class="item-box-blog-text">
                        <p>{{ $posts[2]->body}}</p>
                      </div>
                      <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                      <!--Read More Button-->
                    </div>
                  </div>
                </div>

              </div>
              <!--.row-->

            </div>
            <!--.item-->
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-4 bg-warning" >
                  <div class="item-box-blog">
                    <div class="item-box-blog-image">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 04</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg" class="w-50 h-50"> </figure>
                    </div>
                    <div class="item-box-blog-body">
                      <!--Heading-->
                      <div class="item-box-blog-heading">
                        <a href="#" tabindex="0">
                          <h5>News Title</h5>
                        </a>
                      </div>
                      <!--Data-->
                      <div class="item-box-blog-data" style="padding: px 15px;">
                        <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                      </div>
                      <!--Text-->
                      <div class="item-box-blog-text">
                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                      </div>
                      <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                      <!--Read More Button-->
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 bg-danger" >
                  <div class="item-box-blog">
                    <div class="item-box-blog-image">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 05</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg" class="w-50 h-50"> </figure>
                    </div>
                    <div class="item-box-blog-body">
                      <!--Heading-->
                      <div class="item-box-blog-heading">
                        <a href="#" tabindex="0">
                          <h5>News Title</h5>
                        </a>
                      </div>
                      <!--Data-->
                      <div class="item-box-blog-data" style="padding: px 15px;">
                        <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                      </div>
                      <!--Text-->
                      <div class="item-box-blog-text">
                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                      </div>
                      <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                      <!--Read More Button-->
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 bg-info" >
                  <div class="item-box-blog">
                    <div class="item-box-blog-image">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 06</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg" class="w-50 h-50"> </figure>
                    </div>
                    <div class="item-box-blog-body">
                      <!--Heading-->
                      <div class="item-box-blog-heading">
                        <a href="#" tabindex="0">
                          <h5>News Title</h5>
                        </a>
                      </div>
                      <!--Data-->
                      <div class="item-box-blog-data" style="padding: px 15px;">
                        <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                      </div>
                      <!--Text-->
                      <div class="item-box-blog-text">
                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                      </div>
                       <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                      <!--Read More Button-->
                    </div>
                  </div>
                </div>

              </div>
              <!--.row-->
            </div>
            <!--.item-->
          </div>
  </div>
</div>
@endsection
