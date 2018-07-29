# 2018-Concert-Life-Project
Back end(Legacy PHP) + Front end(HTML, CSS, JavaScript, jQuery)

----------------------------------------------

## Secure

* PDO방식을 채택하여 DB Injection 공격에 대비,
* CRUD의 프로세스에 해당되는 php 파일은 route 디펜스 파일을 포함시켜 접근하지 못하도록 하였음.
* 세션과 DB조회를 이용하여 글 작성 및 수정시 비밀번호, 글쓴이 등 검증과정을 거침

## Front-end

* HTML과 CSS, JavaScript, jQuery 를 이용하여 디자인하였음.
* 각 페이지별로 스크립트 및 CSS를 분리하여 모듈화하였음.
* 필요한 HTML파일 역시 모듈화하여 원하는 페이지에 삽입함.

## Back-end

* 학습을 위해 Legacy PHP를 이용. ( 라이브러리, 프레임워크 사용 X )
* 회원가입 및 CRUD 구현
* 파일업로드 기능 구현
* 테이블, 스키마, 서버 등 DB 정보 변동시 유지보수가 쉽도록 SettingDB.php 파일을 따로 만들었음.

## P.S

* 현재 회원가입시 유효성검사 미구현상태. Vue.js 를 이용하여 유효성 검사를 추가할 예정이다.
