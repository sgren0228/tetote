<?php
/*
 * Template Name: 会社概要・基本情報ページ用
 */
 get_header(); 
 ?>
    <main>
        <section id="fv-bottom">
            <div class="fv-bottom__wrapper about-us__wrapper">
                <h2 class="fv-bottom__title">ABOUT US</h2>
                <p class="fv-bottom__title-sub">TETOTEについて</p>
                <p class="fv-bottom__dis">私たちの理念を紹介をします。</p>
            </div>
        </section>  
        
        <section id="about-us-value">
            <div class="about-us__wrapper">
                <h2 class="bottom__title">私達が大切にしていること</h2>
                <ul class="about-us-value__items">
                    <li class="about-us-value__list">
                        <h3 class="about-us-value__item-title"><span>1</span>飽くなき探求心で、革新を創り出す</h3>
                        <p class="about-us-value__item-text">
                            100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。
                        </p>
                    </li>
                    <li class="about-us-value__list">
                        <h3 class="about-us-value__item-title"><span>2</span>デジタル技術の力で、未来を加速させる</h3>
                        <p class="about-us-value__item-text">
                            ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。
                        </p>
                    </li>
                    <li class="about-us-value__list">
                        <h3 class="about-us-value__item-title"><span>3</span>人材こそが、未来への鍵</h3>
                        <p class="about-us-value__item-text">
                            従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。
                        </p>
                    </li>
                    <li class="about-us-value__list">
                        <h3 class="about-us-value__item-title"><span>4</span>未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる</h3>
                        <p class="about-us-value__item-text">
                            IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。
                        </p>
                    </li>
                    <li class="about-us-value__list">
                        <h3 class="about-us-value__item-title"><span>5</span>働きがいと充実感あふれる環境</h3>
                        <p class="about-us-value__item-text">
                            ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <section id="about-us-message">
            <div class="about-us__wrapper">
                <h2 class="bottom__title">代表メッセージ</h2>
                <div class="about-us-message__inner">
                    <div class="about-us-message__left">
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/img/ceo.jpg'); ?>" alt="">
                    </div>
                    <div class="about-us-message__right">
                        <p class="about-us-message__catch">
                            あなたがやりたいこと<br> それを全力でサポートできる、<br> それがTETOTEの強みです。
                        </p>
                        <p class="about-us-message__text">
                            TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。
                        </p>
                        <p class="about-us-message__text">
                            お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。その結果、お客様との深い信頼関係を築き、共に成長することができています。
                        </p>
                        <p class="about-us-message__text">
                            TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。
                        </p>
                        <p class="about-us-message__text">
                            私たちと共に、未来を創造していきましょう。
                        </p>
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/img/田中浩二郎.svg'); ?>" alt="" class="about-us-message__name">
                    </div>
                </div>
            </div>
        </section>

        <section id="about-us-service">
            <div class="about-us__wrapper">
                <h2 class="bottom__title">事業紹介</h2>
                <p class="about-us-service__dis">
                    TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか紹介                させていただきます。
                </p>
                <ul class="about-us-service__items">
                    <li class="about-us-service__list">
                        <div class="about-us-service__item-left">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/img/consulting.jpg'); ?>" alt="">
                        </div>
                        <div class="about-us-service__item-right">
                            <h3 class="about-us-service__item-title">コンサルティング事業</h3>
                            <p class="about-us-service__item-catch">お客様と伴走し、売上に直接貢献できる</p>
                            <p class="about-us-service__item-text">
                                営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。
                            </p>
                        </div>
                    </li>
                    <li class="about-us-service__list">
                        <div class="about-us-service__item-left">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/img/solution-sales.jpg'); ?>" alt="">
                        </div>
                        <div class="about-us-service__item-right">
                            <h3 class="about-us-service__item-title">ソリューション営業事業</h3>
                            <p class="about-us-service__item-catch">お客様の課題を見つけ出し、必要な施策を 提案する</p>
                            <p class="about-us-service__item-text">
                                お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。
                            </p>
                        </div>
                    </li>
                    <li class="about-us-service__list">
                        <div class="about-us-service__item-left">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/img/desiner.jpg'); ?>" alt="">
                        </div>
                        <div class="about-us-service__item-right">
                            <h3 class="about-us-service__item-title">業務系システム開発事業</h3>
                            <p class="about-us-service__item-catch">お客様の課題解決を強力にサポートするシステムを設計する</p>
                            <p class="about-us-service__item-text">
                                基本設計書に従って開発とテストを実施し、本番稼働をサポート。企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="about-us-info">
            <div class="about-us__wrapper">
                <h2 class="bottom__title">会社概要</h2>
                <dl class="about-us-info__inner">
                    <dt class="about-us-info__label">会社名</dt>
                    <dd class="about-us-info__data">TETOTE株式会社</dd>
                    <dt class="about-us-info__label">所在地</dt>
                    <dd class="about-us-info__data">〒100-0001 東京都千代田区千代田 1-1-1</dd>
                    <dt class="about-us-info__label">代表者名</dt>
                    <dd class="about-us-info__data">田中 浩二郎 (代表取締役)</dd>
                    <dt class="about-us-info__label">事業内容</dt>
                    <dd class="about-us-info__data">・ITコンサルティング <br>・コンサル導入企業への営業</dd>
                    <dt class="about-us-info__label">電話番号</dt>
                    <dd class="about-us-info__data">03-1234-5678</dd>
                    <dt class="about-us-info__label">ウェブサイトURL</dt>
                    <dd class="about-us-info__data">https://tetote.co.jp</dd>
                    <dt class="about-us-info__label">メールアドレス</dt>
                    <dd class="about-us-info__data">tetote@tetote.co.jp</dd>
                    <dt class="about-us-info__label">設立年月</dt>
                    <dd class="about-us-info__data">1923年4月1日</dd>
                </dl>
            </div>
        </section>
    </main>
<?php get_footer(); ?>

