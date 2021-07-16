@extends('frontend.layouts.app')



<head>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/eco.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>


    </style>

</head>
@section('content')

    <main role="main">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>

            </ol>
            <div class="carousel-inner" >
                <div class="carousel-item active" style="height:620px;">
                    <img class="d-block w-100"
                        src="frontend/images/climate.jpeg"
                        alt="First slide"
                        style="height:620px;">
                </div>
                <div class="carousel-item"style="height:620px;">
                    <img class="d-block w-100"
                        src="frontend/images/climate 2.jpeg"
                        alt="Second slide"
                        style="height:620px;">
                </div>
                
                
                <div class="carousel-item" style="height:620px;">
                    <img class="d-block w-100"
                        src="https://www.iceniprojects.com/wp-content/uploads/2019/06/We%E2%80%99ve-heard-plenty-of-rhetoric-surrounding-the-climate-emergency-but-where%E2%80%99s-the-action.png"
                        alt="Forth slide"
                        style="height:620px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="album ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">UNICEF</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDi7J7qFKUBl-IEl8tYzk2y9iWFu-S9MBptIUnKQ_cmSsmHSHMUwqYLhSORaxnb_YTy_k&usqp=CAU"
                                                style="width:100%;height:250px;" class="card-img-top" alt="UNICEF">
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="container">
                                                <p style="color:white;">The impact of digital technologies (responsible for
                                                    4% of greenhouse
                                                    gases) is approximately split into the production and consumption
                                                    stages. At the consumption phase, 80% of its impact comes from video,
                                                    which has a huge carbon footprint.The agency is among the most
                                                    widespread and recognizable social welfare organizations in the world.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.unicef.org/srilanka"
                                            class="btn btn-outline-success  mx-2 my-2">
                                            View</a>
                                        <a href="/unicef_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">SOLOCAL</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://d29md5j3ph8xfz.cloudfront.net/100_percent/upload/Groupe/45/0d2ab393546f03010e433ff10ccadadc.png"
                                                style="width:100%; height:250px;" class="card-img-top" alt="solocal">
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="container">
                                            <p style="color:white;">Since 2013, Solocal has been engaged in a corporate social responsibility
                                                strategy. In 2018, compliance with the European Directive on the
                                                Publication of Extra-Financial Information has led Solocal to re-examine
                                                its main CSR risks and opportunities in order to publish its Statement
                                                on Non-Financial Performance (SNFP).</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.solocal.com/"
                                            class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/solocal_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">The British Council</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOCBE5epqcEBuz-l5sCWwqS4-h2eKD6D65oDAitHYbco7wHRe--rgQ_y0wB5DGG0xQ-HA&usqp=CAU"
                                                style="width:100%; height:250px;" class="card-img-top"
                                                alt="british-council">
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="container">
                                            <p style="color:white;">The British Council builds connections, understanding and trust between
                                                people in the UK and other countries through arts and culture, education
                                                and the English language. ..Our work in arts and culture stimulates
                                                creative expression and exchange and nurtures creative enterprise.</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.britishcouncil.lk/"
                                            class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/bc_form" class="btn btn-outline-success mx-2 my-2">Edit</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">Asia Foundation</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="data:image/png;base64,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"
                                                style="width:100%;height:250px;" class="card-img-top" alt="asiafoundation">

                                        </div>
                                        <div class="flip-card-back">
                                            <div class="container">
                                            <p style="color:white;">The Asia Foundation is a nonprofit international development organization
                                                committed to improving lives across a dynamic and developing Asia.
                                                Informed by six decades of experience and deep local expertise, our work
                                                across the region addresses five overarching goals—strengthen
                                                governance, empower women, expand economic opportunity, increase
                                                environmental resilience, and promote international cooperation.</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://asiafoundation.org/where-we-work/sri-lanka/"
                                            class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/af_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">USAID</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://d2v9ipibika81v.cloudfront.net/uploads/sites/290/USAID-Logo.jpg"
                                                style="width:100%; height:250px;" class="card-img-top" alt="USAID">
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="container">
                                            <p style="color:white;">USAID transforms. It transforms families, communities, and countries – so
                                                they can thrive and prosper. Whether by preventing the next global
                                                epidemic, responding to a devastating earthquake, or helping a farmer
                                                access tools to grow her business.</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.usaid.gov/sri-lanka"
                                            class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/usaid_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">Peace Brigades International</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyxV-sHbumnVevDxK35wFysW7I9cCozyAd-OimmD4kMT__WRmfIkSkZ_60QOlHyrOpisI&usqp=CAU"
                                                style="width:100%; height:250px;" class="card-img-top"
                                                alt="peace brigades international">
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="container">
                                            <p style="color:white;">Human rights defenders- courageous people who stand up for the rights and
                                                dignity of their communities because they believe in peace and justice
                                                for all are at the heart of all we do. We use our international presence
                                                and global networks to protect,support and enable the work of human
                                                rights defenders are at the heart of all we do at PBI.local activists
                                                for peaceful social change.
                                            </p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.peacebrigades.org/"
                                            class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/pbi_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

@endsection
