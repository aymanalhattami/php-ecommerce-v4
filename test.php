<?php
	include 'header-before.php';
?>


<div class="" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carousel-example-02" class="carousel slide" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-02" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-02" data-slide-to="1"></li>
                        <li data-target="#carousel-example-02" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="carousel-1" src="products\stories\S2.jpg" width="300" alt="...">
                            <div class="carousel-caption">
                                The browser will calculate and select a width for the specified elemen
                                The browser will calculate and select a width for the specified elemen
                            </div>
                        </div>
                        <div class="item">
                            <img src="products\watches\W1.jpg" width="300" alt="...">
                            <div class="carousel-caption">
                                The browser will calculate and select a width for the specified elemen
                            </div>
                        </div>
                        <div class="item">
                            <img src="products\plants\V1.jpg" width="300" alt="...">
                            <div class="carousel-caption">
                                The browser will calculate and select a width for the specified elemen
                                The browser will calculate and select a width for the specified elemen
                                The browser will calculate and select a width for the specified elemen
                            </div>
                        </div>
                    </div>
                    <a class="right carousel-control" href="#carousel-example-02" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="left carousel-control" href="#carousel-example-02" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	include 'footer.php';
?>