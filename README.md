[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/0zpPJvnn)
# Component 2 - Task

<p>This is a starter Laravel package that includes BREEZE for authentication and is scaffolded with TailwindCSS. 
</p>
<p>
Please see the assignment brief for a full set of requirements
</p>
<p>
Once the project is cloned to your workspace. You will need to:
</p>
<ul>
<li><b>composer install</b> (to populate the vendor folder)</li>
<li><b>npm install && npm run dev</b> (to populate node_modules)</li>
<li><b>cp .env.example .env</b> to create your own .env file</li>
<li><b>php artisan key:generate</b> to add a key to the .env file</li>
</ul>

<br />
<br />
<b>NOTE (For development on Che)</b>

<p>As Che will force https connection the following file needs to be amended<br />

app/Providers/AppServiceProvider.php <br />

<code>public function boot(): void
    <br />&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\URL::forceScheme('https'); 
    <br />&nbsp;}
</code>

In addition as Che routes the test site through a different port - Vite as a live css development tool will likely not connect,
rather than <em>npm run dev</em>, use <em>npm run build</em> to see the site running.

Spotify scrobbler (lastFM) exported to JSON and then imported into the DB.

id created_at updated_at artist title price

3 Coldplay Viva la Vida 3.49
4 Coldplay Clocks 3.19
5 2023-11-15 12:48:13 2023-11-15 12:48:13 Avicii Feeling Good 9.76
6 2023-11-15 12:48:13 2023-11-15 12:48:13 Oliver Heldens I Was Made For Lovin' You 11.24
7 2023-11-15 12:48:13 2023-11-15 12:48:13 Avicii Heaven 10.45
8 2023-11-15 12:48:13 2023-11-15 12:48:13 Calvo Let Me Love You - DAZZ Remix 8.32
9 2023-11-15 12:48:13 2023-11-15 12:48:13 Avicii What Would I Change It To 7.92
10 2023-11-15 12:48:13 2023-11-15 12:48:13 Calvin Harris Acceptable in the 80's 10
11 2023-11-15 12:48:13 2023-11-15 12:48:13 Kygo Stole The Show 9.21
12 2023-11-15 12:48:13 2023-11-15 12:48:13 Martin Solveig Intoxicated - Radio Edit 8.92
13 2023-11-15 12:48:13 2023-11-15 12:48:13 Craig David I Know You - Vigiland Remix 7.6
14 2023-11-15 12:48:13 2023-11-15 12:48:13 Calvin Harris Sweet Nothing 7.22
15 2023-11-15 12:48:13 2023-11-15 12:48:13 Avicii Sunset Jesus 8.14
16 2023-11-15 12:48:13 2023-11-15 12:48:13 CLMD DANCE 6.49
17 2023-11-15 12:48:13 2023-11-15 12:48:13 Hayla Naked - THAT KIND Remix 6.19
18 2023-11-15 12:48:13 2023-11-15 12:48:13 Riton Friday - Dopamine Re-Edit 6.48
19 2023-11-15 12:48:13 2023-11-15 12:48:13 Wahlstedt Nobody Else 8.01
20 2023-11-15 12:48:13 2023-11-15 12:48:13 Deepend Skinny Dip - Komodo 6.78
21 2023-11-15 12:48:13 2023-11-15 12:48:13 Kungs This Girl - Kungs Vs. Cookin' On 3 Burners 6.35
22 2023-11-15 12:48:13 2023-11-15 12:48:13 Robin Schulz Ha Leh Lou Ya 7.53
23 2023-11-15 12:48:13 2023-11-15 12:48:13 Avicii True Believer 10.8
24 2023-11-15 12:48:13 2023-11-15 12:48:13 Robin Schulz Sugar 6.74
25 2023-11-15 12:48:13 2023-11-15 12:48:13 Tujamo WITH U 7.43
26 2023-11-15 12:48:13 2023-11-15 12:48:13 BUNT. Hurricane 7.67
27 2023-11-15 12:48:13 2023-11-15 12:48:13 Mako Real Life 11.07
28 2023-11-15 12:48:13 2023-11-15 12:48:13 Robin Schulz Love Me Loud 10.2
29 2023-11-15 12:48:13 2023-11-15 12:48:13 Sam Feldt Call On Me 8.54
30 2023-11-15 12:48:13 2023-11-15 12:48:13 Kygo Oasis 7.38
31 2023-11-15 12:48:13 2023-11-15 12:48:13 M-22 First Time 8.33
32 2023-11-15 12:48:13 2023-11-15 12:48:13 Avicii Gonna Love Ya 6.48
33 2023-11-15 12:48:13 2023-11-15 12:48:13 Mr. Probz Waves 6.99
34 2023-11-15 12:48:13 2023-11-15 12:48:13 Hook N Sling The Best 10.8
35 2023-11-15 12:48:13 2023-11-15 12:48:13 Sam Feldt 2 Hearts - Club Mix 9.59
36 2023-11-15 12:48:13 2023-11-15 12:48:13 Oliver Heldens Never Look Back - Leftwing : Kody Remix 8.74
37 2023-11-15 12:48:13 2023-11-15 12:48:13 Kungs Never Going Home 6.77
38 2023-11-15 12:48:13 2023-11-15 12:48:13 Kygo Raging 9.27
39 2023-11-15 12:48:13 2023-11-15 12:48:13 Dash Berlin Save Myself 7.96
40 2023-11-15 12:48:13 2023-11-15 12:48:13 Felix Jaehn Somebody You Like 11.41
41 2023-11-15 12:48:13 2023-11-15 12:48:13 Avicii Levels 10.36
42 2023-11-15 12:48:13 2023-11-15 12:48:13 Navos You & I 9.34
43 2023-11-15 12:48:13 2023-11-15 12:48:13 Vicetone Nevada 7.64
44 2023-11-15 12:48:13 2023-11-15 12:48:13 BANNERS Start a Riot 10
45 2023-11-15 12:48:13 2023-11-15 12:48:13 Calvin Harris I Need Your Love 7.83
46 2023-11-15 12:48:13 2023-11-15 12:48:13 Kygo ID 10.84
47 2023-11-15 12:48:13 2023-11-15 12:48:13 Little Giants We Start Fires 10.11
48 2023-11-15 12:48:13 2023-11-15 12:48:13 Martin Solveig Places 11.48
49 2023-11-15 12:48:13 2023-11-15 12:48:13 Dillon Francis Coming Over 11.02
50 2023-11-15 12:48:13 2023-11-15 12:48:13 KELVIN WOOD Faded 5.75
51 2023-11-15 12:48:13 2023-11-15 12:48:13 Kygo Broken Glass 7.87
52 2023-11-15 12:48:13 2023-11-15 12:48:13 Mike Williams Fallin' In 8.55
53 2023-11-15 12:48:13 2023-11-15 12:48:13 Oliver Heldens What The Funk 9.72
