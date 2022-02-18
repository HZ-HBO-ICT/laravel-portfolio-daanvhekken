<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'What do i do if i need to print a document?',
            'answer' => 'Navigate to print.hz.nl and follow the steps to print your documents! ',
            'link' => 'https://print.hz.nl/',
        ]);
        DB::table('faqs')->insert([
            'question' => 'How do i scan a document and sent it to my laptop?',
            'answer' => 'Navigate to print.hz.nl and follow the steps to scan your documents! ',
            'link' => 'https://print.hz.nl/',
        ]);
        DB::table('faqs')->insert([
            'question' => 'What do i do when i get sick or show symptoms of covid-19?',
            'answer' => '
            Do you have health complaints like a cold, cough, high temperature or sudden loss of taste and smell?
            Do you have a fever?
            Take a look if you can visit the HZ here.
            Protect if needed yourself and others and get yourself tested.
            You can make an appointment via 0800-1202 or via coronatest.nl, this test is free ',
            'link' => 'https://hz.nl/coronavirus/faq/',
        ]);
        DB::table('faqs')->insert([
            'question' => 'How do i book a project space in one of the wings?',
            'answer' => '
            Head over to the selfservice portals location reservation planner.
            From here you can select a timeslot in the desired room. ',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner/',
        ]);
        DB::table('faqs')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => '
            If you have a HZ student pass navigate with your car to the parking spot on the following adres: Poelendaelesingel, 4335 JA Middelburg.
            Here you can press your hz student pass against the NFC scanner and the pole will open up and you can park your car. ',
            'link' => '
            https://www.google.com/maps/place/Poelendaelesingel,+4335+JA+Middelburg/data=!4m2!3m1!1s0x47c490cf037d0a93:0x4c798c80240e3bbf?sa=X&ved=2ahUKEwik-b73iPH1AhWFO-wKHR6nAHUQ8gF6BAgaEAE',
        ]);
    }
}
