<div class="select_hous">
    <div class="hous_business">


            <p class="ouverture">
                Définir les heures d'ouverture
            </p>

        <div class="radio">
            <div class="option_select">
                    <div>
                        <input type="radio" name="option" value="option2" id="option2">
                        <label for="option2">24 hrs x 7 days</label>
                            <br>
                        <small>Round the clock support</small>
                        <br>
                    </div>
                    <div>
                        <input type="radio" name="option" value="option1" id="option1">
                        <label for="option1"> Custom business hours</label>
                        <br>
                        <small>Setup custom working hours for your team</small>
                    </div>
            </div>
            <br>

            {{-- Contenue 1 --}}
            <div id="content1" style="display: none;">
                <span>select the working days</span>
                    @foreach ($calendar->days as $day)
                        <div class="days">
                            <div class="plaise">
                                <div class="grid">
                                    <input type="checkbox" id="lundi" value="{{$day->day}}" data-target="content01">
                                    <label for="lundi">Lundi</label>
                                </div>



                                <div class="grid">
                                    <input type="checkbox" id="mardi" value="{{$day->day}}" data-target="content02">
                                    <label for="mardi">Mardi</label>
                                </div>

                                <div class="grid">
                                    <input type="checkbox" id="mercredi" value="{{$day->day}}" data-target="content03">
                                    <label for="mercredi">Mercredi</label>
                                </div>

                                <div class="grid">
                                    <input type="checkbox" id="jeudi" value="{{$day->day}}" data-target="content04">
                                    <label for="jeudi">Jeudi</label>
                                </div>

                                <div class="grid">
                                    <input type="checkbox" id="vendredi" value="{{$day->day}}" data-target="content05">
                                    <label for="vendredi">Vendredi</label>
                                </div>

                                <div class="grid">
                                    <input type="checkbox" id="samedi" value="{{$day->day}}" data-target="content06">
                                    <label for="samedi">Samedi</label>
                                </div>

                                <div class="grid">
                                    <input type="checkbox" id="dimanche" value="{{$day->day}}" data-target="content07">
                                    <label for="dimanche">Dimanche</label>
                                </div>
                            </div>


                            <span>Enter the working hours</span>

                            <div id="content01" style="display: none;" >
                                <div class="day_number">
                                    <div class="mar_lun">
                                        <label for="">Lundi</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->start}}" id="">
                                    </div>
                                    <div class="to">
                                        <small>to</small>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->end}}" id="">
                                    </div>
                                </div>
                            </div>





                            <div id="content02" style="display: none;">
                                <div class="day_number">
                                    <div class="mar_lun">
                                        <label for="">Mardi</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->start}}" id="">
                                    </div>
                                    <div class="to">
                                        <small>to</small>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->end}}" id="">
                                    </div>
                                </div>
                            </div>

                            {{-- mercredi --}}


                            <div id="content03" style="display: none;">
                                <div class="day_number">
                                    <div class="mar_lun">
                                        <label for="">Mercredi</label>
                                    </div>
                                    <div class="col-md-2" style="margin-left: -20px;">
                                        <input type="time" name="" value="{{$day->start}}" id="">
                                    </div>
                                    <div class="to">
                                        <small style="margin-left: 13px;">to</small>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->end}}" id="">
                                    </div>
                                </div>
                            </div>

                            {{-- jeudi --}}


                            <div id="content04" style="display: none;">
                                <div class="day_number">
                                    <div class="mar_lun">
                                        <label for="">Jeudi</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" id="" value="{{$day->start}}" style="margin-left: 1px;">
                                    </div>
                                    <div class="to">
                                        <small style="margin-left: 17px;">to</small>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->end}}" id="">
                                    </div>
                                </div>
                            </div>

                            {{-- vendredi --}}



                            <div id="content05" style="display: none;">
                                <div class="day_number">
                                    <div class="mar_lun">
                                        <label for="">Vendredi</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" id="" value="{{$day->start}}" style="margin-left: -23px;">
                                    </div>
                                    <div class="to">
                                        <small style="margin-left: -9px;">to</small>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->end}}" id="">
                                    </div>
                                </div>
                            </div>

                            {{-- samedi --}}



                            <div id="content06" style="display: none;">
                                <div class="day_number">
                                    <div class="mar_lun">
                                        <label for="">Samedi</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" id="" value="{{$day->start}}" style="margin-left: -16px;">
                                    </div>
                                    <div class="to">
                                        <small style="margin-left: 2px;">to</small>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->end}}" id="">
                                    </div>
                                </div>
                            </div>

                            {{-- dimanche --}}



                            <div id="content07" style="display: none;">


                                <div class="day_number">
                                    <div class="mar_lun">
                                        <label for="">Dimanche</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" id="" value="{{$day->start}}" style="margin-left: -34px;">
                                    </div>
                                    <div class="to">
                                        <small style="  margin-left: -14px;">to</small>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="time" name="" value="{{$day->end}}" id="">
                                    </div>
                                </div>

                            </div>
                        </div> {{--  fin de class="day" --}}
                    @endforeach

            </div> {{--  fin de contenu 1 --}}


                        <div id="content2" style="display: none;">

                        </div>




        </div> {{--  fin de class="radio"  --}}


    </div>      {{--  fin de class ="hous_business" --}}

</div>
