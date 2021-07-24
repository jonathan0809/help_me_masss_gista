@extends('layouts.lihatDetailProfile')
@section('content')
<div class="content-body">
    <div id="wrapper">
        <article id="contact" class="wrapper style4">
            <div class="container medium">
                <header>
                    <h2>Berikan Ulasan</h2>
                    <p>Tolong berikan ulasannya</p>
                    <br>
                    <div>
                        <div class="rateyo mx-auto" id="rating"
                            data-rateyo-rating="4"
                            data-rateyo-num-stars="5"
                            data-rateyo-score="3">
                        </div>
                        <span class='result'>0</span>
                        <input type="hidden" name="rating">
                    </div>
                </header>
                <div class="row">
                    <div class="col-12">
                        <form method="" action="#">
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Kirim Review" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>


        $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :'+ rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });

    </script>
@endsection
