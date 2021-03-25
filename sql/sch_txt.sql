-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-02-15 09:01
-- 서버 버전: 10.4.16-MariaDB
-- PHP 버전: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `sch_txt`
--

CREATE TABLE `sch_txt` (
  `sch_txt_num` int(11) NOT NULL COMMENT '고유번호',
  `sch_txt_cate` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '프로젝트 종류',
  `sch_txt_tit` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '작성 스케줄 제목',
  `sch_txt_con` text CHARACTER SET utf8 NOT NULL COMMENT '작성 스케줄 내용',
  `sch_txt_reg` date NOT NULL COMMENT '글 등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `sch_txt`
--

INSERT INTO `sch_txt` (`sch_txt_num`, `sch_txt_cate`, `sch_txt_tit`, `sch_txt_con`, `sch_txt_reg`) VALUES
(1, 'dbProject', '데이터 베이스 프로젝트 마무리 작업', '1. 수정 사항 수정<br />\r\n2. 2차 테스트 완료', '2021-02-08'),
(2, 'dbProject', '상품 입력 텍스트', '1. 상품 입력 테스트 완료<br />\r\n2. 상품 상세 보기 테스트 예정', '2021-02-09'),
(3, 'dbProject', '게시판 업로드 수정', '1. 게시판 업로드 수정 완료<br />\r\n2. 페이징 처리 작업 예정', '2021-02-10'),
(4, 'apiProject', '날씨 api 주소 검색', '1. 주소를 통한 json 데이터 받기<br />\r\n2. 로우 데이터 뿌리기', '2021-02-11'),
(5, 'apiProject', '영화 api 데이터 검색', '1. 다큐멘테이션 정리<br />\r\n2. 사용 범위 규정', '2021-02-12'),
(6, 'apiProject', '레이아웃 정리', '1. 레이아웃 디자인<br />\r\n2. css 코딩', '2021-02-13'),
(7, 'renewalProject', '리뉴얼 사이트 디자인 검색', '1. 대략적인 구조 정리', '2021-02-14'),
(8, 'renewalProject', '리뉴얼 디자인 퍼블리싱 시작', 'css및 js를 이용한 디자인 작업 시작', '2021-02-15'),
(9, 'webProject', '구현 전 PPT 파일 목차 정리', '1. 구현 전 목차 정리 및 표준화 작업<br />\r\n2. 구현 언어 선정', '2021-02-01'),
(10, 'webProject', '발표 자료 준비', '1. 목차별 발표 자료 준비', '2021-02-02'),
(11, 'webProject', '기획 마무리', '디자인 작업 중', '2021-02-15');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `sch_txt`
--
ALTER TABLE `sch_txt`
  ADD PRIMARY KEY (`sch_txt_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `sch_txt`
--
ALTER TABLE `sch_txt`
  MODIFY `sch_txt_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
