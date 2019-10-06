<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Ibsellnet\Leadspopupconvertor\Models\Popups;
use Ibsellnet\Leadspopupconvertor\Models\Popuptype;
use Seeder;

class Seeder109 extends Seeder
{
    public function run()
    {
        $popupType01 = Popuptype::insert([
            'name'=>'After some seconds',
            'description'=>'This popup will appear by default after 10 seconds a user stay on a page.

The number of seconds can be changed if you fill in a new value when you create or edit a popup.'
        ]);

        $popupType02 = Popuptype::insert([
        'name'=>'When the user click a  button',
            'description'=>'This type of popup will appear when the user will click on a button.
The button must have an identifier like an ID or a CLASS so you can se this up when you create the popup.'
        ]);

        $popupType03 = Popuptype::insert([
        'name'=>'Before user want\'s to leave the page',
            'description'=>'When the user leave the page or intend to then a popup will appear.'
        ]);

        $popupType04 = Popuptype::insert([
        'name'=>'Specify an url special for this popup - not ready - still in development',
            'description'=>'You cn place on top of you link ?popupurl=34'
        ]);


        //fill in a popup example after 10 seconds
        $popupDemo01 = Popups::insert([
            'name'=>'Demo Popup will be visible in 3 seconds',
            'popuptype_id'=>'1',
            'content'=>'<p><strong>Convert More Visitors into Subscribers &amp; Customers with Exit Intent</strong></p>

<p><strong>Use Privy on-site displays like this one to grow your email list, reduce abandonment, and drive online sales</strong></p>

<p class="oc-text-bordered"><strong><a href="https://ibsell.net">SIGN UP FREE</a></strong></p>
',
            'type1_seconds'=>'3',
        ]);


    }
}