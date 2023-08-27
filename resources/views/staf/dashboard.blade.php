@extends('staf.layout.base')
@section('title', 'Dashboard')
@section('content')
    <!--untuk kata dashboard-->
    <div class="row column_title">
        <div class="col-md-12">
           <div class="page_title">
              <h2>Dashboard Staf</h2>
           </div>
        </div>
     </div>
     <!--untuk kata dashboard-->

    <div class="row column1">

        <!--jumlah staff-->
        <div class="col-md-6 col-lg-3">
         <div class="full counter_section margin_bottom_30">
            <div class="couter_icon">
               <div> 
                  <i class="fa fa-users yellow_color"></i>
               </div>
            </div>
            <div class="counter_no">
               <div>
                  <p class="total_no">{{$userCount}}</p>
                  <p class="head_couter">User</p>
               </div>
            </div>
         </div>
        </div>
        <!--jumlah staff-->

        <!--untuk jumlah arsip dokumen paspor-->
        <div class="col-md-6 col-lg-3">
         <div class="full counter_section margin_bottom_30">
            <div class="couter_icon">
               <div> 
                  <i class="fa fa-bookmark green_color"></i>
               </div>
            </div>
            <div class="counter_no">
               <div>
                  <p class="total_no">{{$pasporCount}}</p>
                  <p class="head_couter">Arsip Paspor</p>
               </div>
            </div>
         </div>
        </div>
        <!--untuk jumlah arsip dokumen paspor-->

        <!--untuk jumlah arsip paspor-->
        
        
        <!--untuk jumlah arsip dokumen paspor-->
    </div>

    <div class="row column2 graph margin_bottom_30">
        <div class="col-md-l2 col-lg-12">
           <div class="white_shd full">
                <div class="full graph_head">
                 <div class="heading1 margin_0">
                    <h2>Grafik Pengarsipan</h2>
                 </div>
                </div>
              <div class="full graph_revenue">
                 <div class="row">
                    <div class="col-md-12">
                       <div class="content">
                          <div class="area_chart">
                             <canvas height="120" id="canvas"></canvas>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
@endsection