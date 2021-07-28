@extends('layouts.lihatDetailProfile')
@section('content')



<div class="content-body">
    <div id="wrapper">
    <div id="main">
        <div class="inner">
            <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Beri Rating</h4>

                                </div>
                                <div class="card-body">
                                    <div class="basic-form" >
                                        <form method='POST' action={{ url('tambah') }} autocomplete="off">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Rating</label>
                                                <div class="col-sm-9">
                                                    <div  class="rateyo" id="rating" data-rateyo-rating="0" data-rateyo-num-stars="5" data-rateyo-score="3" wire:ignore>
                                                    </div>
                                                    <span class='result' wire:ignore>0</span>
                                                    <input type="hidden" name="rating" wire:model="rating">
                                                    <div>
                                                        @error('rating')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                                <div class="col-sm-9">
                                                    <textarea name="keterangan" class="form-control" rows="4" wire:model="keterangan" style="color: black; resize: none;" placeholder="Masukkan keterangan"></textarea>
                                                    <div>
                                                        @error('keterangan')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary ml-3">Ok</button>
                                            </div>
                                        </form>
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
