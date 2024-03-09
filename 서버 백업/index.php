<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,maximum-scale=1.0, user-scalable=0">
    <!-- Iphone 모바일 확대 방지  maximum-scale=1.0, user-scalable=0-->
    <title>바이크조</title>
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="바이크조">
    <meta property="og:url" content="https://바이크조.com/">
    <meta property="og:title" content="바이크조">
    <meta property="og:description" content="내 오토바이 무료상담, 짧은 시간 투자로 편안하게 견적 상담 받아보세요!" />
    <meta name="description" content="내 오토바이 무료상담, 짧은 시간 투자로 편안하게 견적 상담 받아보세요!" />
    <meta property="og:image" content="images/img_og.png" />
    <!-- 파비콘 -->
    <link rel="icon" href="images/favicon.png">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/style.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/web.js"></script>
    <link rel="stylesheet" href="css/import.css">
    <script>
        $(document).on("keyup", ".number_input", function() {
            var val= $(this).val();

            if(val.replace(/[0-9]/g, "").length > 0) {
                //alert("숫자만 입력해 주십시오.");
                $(this).val('');
            }
        });

        $(document).ready(function () {
            api('connectForm')
        });
    </script>
</head>
<body>

    <header>
        <div class="contentSize">
            <h1>
                <a href="/">
                    <img src="images/logo.png" alt="바이크조 중고거래소">
                </a>
            </h1>
            <!-- <a href="tel:01058936361">010-5893-6361</a> -->
        </div>
    </header>

    <form id="phoneForm" onsubmit="return false">
        <input type="hidden" name="log_type" value="phone_click">
        <input type="hidden" name="value" value="010-5893-6361">
    </form>

    <form id="phoneForm2" onsubmit="return false">
        <input type="hidden" name="log_type" value="phone_click">
        <input type="hidden" name="value" value="010-7109-0926">
    </form>

    <form id="connectForm" onsubmit="return false">
        <input type="hidden" name="log_type" value="connect">
    </form>


    <section class="inputsArea">
        <div class="contentSize">
            <div>
                <p>전국 어디든 당일 현금 매입!</p>
                <h2>
                    내 오토바이<br/>
                    중고시세 확인하기
                </h2>
                <p>
                    내 오토바이 무료상담, 짧은 시간 투자로<br/>
                    편안하게 견적 상담 받아보세요!
                </p>
            </div>
            <form id="inquiryForm" onsubmit="return false">
                <fieldset>
                    <ul>
                        <li>
                            <label for="">모델명</label>
                            <div>
                                <input type="text" name="model" placeholder="모델명을 입력해주세요.">
                            </div>
                        </li>
                        <li>
                            <label for="">연(년)식</label>
                            <div>
                                <input type="text" class="number_input" name="year" placeholder="숫자만 입력해주세요.">
                            </div>
                        </li>
                        <li>
                            <label for="">키로수</label>
                            <div>
                                <input type="text" name="km" class="number_input" placeholder="숫자만 입력해주세요.">
                            </div>
                        </li>
                        <li>
                            <label for="">지역</label>
                            <div>
                                <div class="selectBox" data-selectName="area">
                                    <button type="button">전체</button>
                                    <div>
                                        <button type="button" data-value="서울특별시">서울특별시</button>
                                        <button type="button" data-value="경기도">경기도</button>
                                        <button type="button" data-value="인천광역시">인천광역시</button>
                                        <button type="button" data-value="부산광역시">부산광역시</button>
                                        <button type="button" data-value="대구광역시">대구광역시</button>
                                        <button type="button" data-value="대전광역시">대전광역시</button>
                                        <button type="button" data-value="경상남도">경상남도</button>
                                        <button type="button" data-value="전라남도">전라남도</button>
                                        <button type="button" data-value="충청남도">충청남도</button>
                                        <button type="button" data-value="광주광역시">광주광역시</button>
                                        <button type="button" data-value="울산광역시">울산광역시</button>
                                        <button type="button" data-value="경상북도">경상북도</button>
                                        <button type="button" data-value="전라북도">전라북도</button>
                                        <button type="button" data-value="충청북도">충청북도</button>
                                        <button type="button" data-value="강원도">강원도</button>
                                        <button type="button" data-value="제주특별자치도">제주특별자치도</button>
                                        <button type="button" data-value="세종특별자치시">세종특별자치시</button>

                                    </div>
                                </div>
                                <input type="hidden" data-select="area" name="area">
                            </div>
                        </li>
                        <li class="fill">
                            <label for="">연락처</label>
                            <div>
                                <input type="text" class="number_input" placeholder="숫자만 입력해주세요." name="contact">
                            </div>
                        </li>
                    </ul>
                    <input type="checkbox" id="agree" name="agree" value="y">
                    <label for="agree">개인정보 수집 및 이용안내에 동의합니다.</label>
                    <input type="submit" value="무료상담 신청하기" onclick="api('inquiryForm')">
                    <p>번거로우시다면 바로 전화문의주세요</p>
                    <a href="tel:010-5893-6361" onclick="api('phoneForm')">T. 010-5893-6361</a>
                    <a href="tel:010-7109-0926" onclick="api('phoneForm2')">T. 010-7109-0926</a>
                </fieldset>
            </form>
        </div>
    </section>

    <div class="callArea">
        <strong>고가 바이크 매입 문의 환영합니다!</strong>
        <a href="tel:010-5893-6361" onclick="api('phoneForm')">T. 010-5893-6361</a>
        <a href="tel:010-7109-0926" onclick="api('phoneForm2')">T. 010-7109-0926</a>
        <p>집 앞까지 방문하여 당일 매입해드립니다.</p>
    </div>

    <footer class="contentSize">
<!--        <address>-->
<!--            <strong>(주)유홍 </strong>-->
<!--            <dl>-->
<!--                <dt>대표</dt>-->
<!--                <dd>홍의근</dd>-->
<!--            </dl>-->
<!--            <p>주소 부산 사상구 학장동 271-9</p>-->
<!--            <dl>-->
<!--                <dt>사업자 등록번호</dt>-->
<!--                <dd>351-87-01835</dd>-->
<!--            </dl>-->
<!--            <dl>-->
<!--                <dt>대표번호</dt>-->
<!--                <dd>010-2967-9731</dd>-->
<!--            </dl>-->
<!--        </address>-->
<!--        <img src="images/passoLogo.png" alt="협력사 PASSO 협력업체">-->
<!--        <b>협력업체</b>-->
    </footer>
</body>
</html>