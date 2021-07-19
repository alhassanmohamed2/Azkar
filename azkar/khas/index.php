<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css?v="<?= time() ?> >
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Scheherazade&display=swap" rel="stylesheet">

    <title>الأذكار</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">
                <img src="../images/icon.png" alt="" width="40" height="40" class="d-inline-block align-text-top"> أذكار الصباح و المساء
            </a>
        </div>
    </nav>
    <div class="ani"> </div>

    <div class="slider">
        <div class="slider-div active">
            <div class="card container">
                <h1>فى الصباح فقط</h1>
                سُبْحَانَ اللهِ عَدَدَ خَلْقِهِ، سُبْحَانَ اللهِ رضا نفسه, سُبحانَ اللهِ زِنَةَ عَرْشِهِ، سُبْحَانَ اللهِ مِدَادَ كَلِمَاتِهِ. (ثلاث مرات)
                <hr>
                <div class="deta">
                    رواه مسلم, والأفضل أن تعمل بالروايتين فتأتي بهذه مرة وتلك مرة. // " سُبْحَانَ اللهِ ": تنزيه وتقديس الله عن النقائص، وما لا يليق بعظمته وكماله. " سُبْحَانَ اللهِ وَبِحَمْدِهِ ": أسبحُ الله وأحمدُ الله, أو أسبح الله مع كوني حامداً له , أسبح الله وأحمده
                    لأنه سبحانه اصطفاني ووفّقني للتسبيح.
                </div>
            </div>
        </div>
        <div class="slider-div ">
            <div class="card container">
                <h1>فى الصباح فقط</h1>
                أَصبَحْنا على فِطرةِ الإسلامِ وعلى وكَلِمةِ الإخلاصِ وعلى ودِينِ نَبيِّنا محمَّدٍ صلَّى اللهُ عليه وسلَّمَ وعلى مِلَّةِ أبِينا إبراهيمَ حَنيفًا مُسلِمًا وما كان مِنَ المُشرِكينَ. (مرة واحدة)
                <hr>
                <div class="deta">
                    صحيح: رواه أحمد والنسائي وغيرهم.
                </div>
            </div>
        </div>
        <div class="slider-div ">
            <div class="card container">
                <h1>فى المساء فقط</h1>

                أعوذُ بكَلِماتِ اللهِ التَّامَّاتِ مِن شَرِّ ما خَلَقَ. (مرة واحدة)
                <hr>
                <div class="deta">
                    رواه مسلم وأبو داود والترمذي, والصحيح أنها تقال مرة واحدة في المساء. // "أعوذ بكَلِماتِ اللهِ التَّامَّاتِ": ألتجئ وأحتمي وأعتصم بكل ما يَتكلمُ به الله جلَّ في علاه, فكلمات الله تامةُ أي كاملةٌ.
                </div>
            </div>
        </div>
        <div class="slider-div ">
            <div class="card container">
                <h1>فى المساء فقط</h1>

                قراءة آخر آيتين من سورة البقرة. (مرة واحدة وتكون القراءة في الليل, يبدأ وقت الليل من غروب الشمس إلى طول الفجر فهذا الذكر غير مرتبط بأذكار النوم, بل هو متعلق بالليل في أي وقت فيه كما جاء في الحديث "في ليلة")

                <hr>
                <div class="deta">
                    رواه البخاري ومسلم, قال النبي صلى الله عليه وسلم: [ الآيتان من آخر سورة البقرة من قرأهما في ليلةٍ ,كفتاه ]. // "كفتاه": أي وَقَتَاهُ ما يكره وحصّلَ بها ما يريد, فالكفاية لها جانبان إدراك المأمون, والوقاية من المكروه, وكلاهما يحصل للمؤمن في ليلته إذا قرأ
                    خواتيم سورة البقرة.
                </div>
            </div>
        </div>
        <button class="adl">
            تفاصيل
        </button>
           <button class="sib">
            <div class="add">0</div>
        </button>

        <div class="slider-btn">
            <input type="button" value="&larr;" class="backward btn-slider">
            <input type="button" value="&rarr;" class="forward btn-slider">
        </div>
     
        <a href="../det" class="adet">عن الأذكار</a>

    </div>




</body>
<script src="script.js?v="<?= time() ?>></script>

</html>