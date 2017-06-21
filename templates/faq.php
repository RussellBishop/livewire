<?php

    $title = 'FAQ Page';

    require '../src/src.php';

    $page = new Page(4630299);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <h4><a href="/templates/whats-on.php">&larr; back to Directory</a></h4>

    <div class="spacing push-top-10 max-width-50rm">
        <h1>Frequently Asked Questions</h1>
        <h3>Have a question about joining or running a Students' Union UCL club or society? Hopefully our frequently asked questions below will help you find the answer. But if not, the Clubs and Societies Centre is there to help you.</h3>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <div large="8" class="spacing">

        <?php

            $faqs = array (

                array (

                    'title'         =>  'How do I join a club or society?',
                    'content'         =>  '<p>Firstly, go to the Welcome Fair at the start of Term 1. Here you can find out all the information you need to know about clubs and societies, including the membership fees. If you miss that, don\'t worry! We have a full directory of clubs and societies online.</p>

<p>There\'s also ‘Try’ fortnight, where most clubs offer free taster sessions for the two weeks, and sports clubs put on trials for two weeks! After those two weeks, there’s ‘Joining’ fortnight. Clubs and societies must have at least 30 members to exist, so join up quickly, and tell all your friends to join too. Each club has a membership fee (explained below), and you can buy your membership online. When the payment has been processed, your name and contact information will be passed onto the club president. If you don’t have a credit or debit card, you can still pay the membership fee in cash, at the CSC Reception.</p>',

                ),

                array (

                    'title'         =>  'What are membership fees and how are they used?',
                    'content'       =>  'To become a member of a club or society, you are usually required to pay a fee. These fees go towards the running cost of your club and are allocated to your “Non-Grant Account ” held by Students\' Union UCL. The fees vary from club to club because a society who’s main activity is discussion, won’t have as much need of funds as a sport that has a lot of expensive equipment. Money is also given to the clubs, by Students\' Union UCL in the form of a grant. “Grant” and “Non-Grant” funds are both used to fund the activities the club provides.',

                ),

                array (

                    'title'         =>  'Do I need previous experience to join a sport or society?',
                    'content'       =>  'The short answer is no. Everybody is welcome to join any Club or Society, no matter what your experience. Most sports clubs have trainers or coaches to help members of all abilities and levels. Some people will go along just for training, others so that they can compete. Give It A Go (GIAG) also runs beginners’ sports sessions in collaboration with the sports clubs. In the past there have been GIAG sessions with Horse Riding and the African Caribbean Society, to name a few. Information on GIAG sessions is available at uclu.org/giag and tickets are available online.',

                ),

                array (

                    'title'         =>  ' How much commitment do I need to put in?',
                    'content'       =>  'How often you go is up to you, as you are the one paying for the membership. All societies meet at least once a week, normally the same day, same time and same location. However sports clubs may need more dedication, as they are competitive and have teams which play matches, although going just to train is often fine - check before you join.',

                ),

                array (

                    'title'         =>  'When and where do societies meet?',
                    'content'       =>  'Most clubs and societies meet at least once a week for training, rehearsals or their regular meeting. There are a few ways to find out when they meet:

Go to the Welcome Fair and meet the existing members of the club. They will tell you when they meet and what their activities are, and they will probably hand you a flyer with the information on.
‘Try’ fortnight, is two weeks when you can go along to as many club meetings as you want and try them out for free. If you want to keep going, the president will tell you about future meetings etc.
Go to the club’s page from the A-Z directory. Their site should have all the information you’ll need about their meetings.
Ring up or visit the CSC reception – they will be able to tell you which societies are using our facilities for meetings, and they can also find out when and where sports clubs are meeting/training.
Can I start a new club or society?
Any UCL student can apply to start a new club or society, and we really enjoy seeing the diversity of activities our members get up to. Affiliations happen twice yearly, once in terms 1 and 2 respectively. A Union Society can only begin activity once it has been successfully affiliated via the Activities Network Executive which meets twice throughout the year to review applications. Please see this page for more information.',

                ),

                array (

                    'title'         =>  'Can UCL alumni/students at another university/UCL staff join a club or society?',
                    'content'       =>  'Yes! Higher Education students from outside of the university, as well as UCL staff and UCL Alumni, are just some of the parties eligible to apply for Students\' Union UCL Associate/Visiting Membership. All you need to do is go to Visiting and Associate Membership page for more information and an application form.

An academic year’s membership is £25 or you can also purchase three months’ membership for £15 and you will then have to pay the club’s membership fee on top of that.',

                ),

            );


            $faqsCount = count($faqs);

            for ($i = 0; $i < $faqsCount; $i++) {

                $faq = $faqs[$i % $faqsCount];

                include('blocks/faqheading.php');

            }

        ?>

    </div>

</grid>

<?php include('../src/footer.php'); ?>
