@extends('layouts.app')

@section('title')
About us | Application
@endsection

@section('content')
<div class="container main-container">

<!-- Page Content -->
    <div class="container">        
        <div class="container" style="margin-top: 1%;">
         <div class="col-md-6">     
           <div class="row">
            <div id="logo">
            <p>Job Description</p>
            </div>
            <form role="form" id="form-buscar">
             <div class="form-group">
             <div class="input-group">
              <input id="1" class="form-control" type="text" name="search" placeholder="Filter by title,benefits,companies,expertise..." required/>
              <span class="input-group-btn">
              <button class="btn btn-success" type="submit">
               <i aria-hidden="true"></i> Search
              </button>
              </span>
             </div>
            </div>
            </form>
           </div>            
           </div>
        </div>
        
        
         <!-- Project One -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
                    Featured Jobs
                </h4>
            </div>
           <!-- Project One -->
        <div class="row">
            <div class="col-md-8">
                <a><h5>Backend Developer San fransico</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-8">
                <a><h5>Backend Developer San fransico</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-8">
                <a><h5>Backend Developer San fransico</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>
            
         <div class="row">
            <div class="col-md-8">
                <a><h5>Backend Developer San fransico</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>
            
         <div class="row">
            <div class="col-md-8">
                <a><h5>Backend Developer San fransico</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

         <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    <!-- /.container -->
</div>
@endsection
