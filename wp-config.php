<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define('DB_NAME', 'wordpress_id');

/** Nama pengguna basis data MySQL */
define('DB_USER', 'root');

/** Kata sandi basis data MySQL */
define('DB_PASSWORD', '');

/** Nama host MySQL */
define('DB_HOST', 'localhost');

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define('DB_CHARSET', 'utf8');

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xp(+M o*ILJZl=g)3=`G9+?}ZHdk=E% og+EPi_8+,[:/*%`?->{<-Q`y[RvIHrl');
define('SECURE_AUTH_KEY',  '|8?30p)nnFo%1ov0A,E-&lno;K=hXNz};q~?Z-w88/^~tpw|1;`$#`6o.dW OB$]');
define('LOGGED_IN_KEY',    '*{&uAR__]T2 U36+2Uv:sg[NYYxEHb.wB $c;<gL08!:HvZptJnXY cCAp]er#1C');
define('NONCE_KEY',        '~|Fie4CKe4irI+T4-M0@)~l/%$2U{Pn:Q4{{{V-7c&@%.+,V?m)|9>2]=(+mKqM-');
define('AUTH_SALT',        '2au?v-.E$Nj^I0@-+}yHS9E:+IvC3RV`z- :!|Nrb+>.gnLq$I&#@{qk^3RId9Z}');
define('SECURE_AUTH_SALT', '_~%*[S]?DddoIM7~P>68A4axlbM:eL![J>nnG8?38%j)?)}9X/Sm$ith$w7uq7og');
define('LOGGED_IN_SALT',   'MK>^heF=3M9TPJ-/lMR+B$Opu^j>I;CnBAzrT7%+I:IS RoF^/.=1UO.<2#2~00J');
define('NONCE_SALT',       '^$+}2.,ao-hRJ%+01*Hu`avEM>Vgc}3F7F_jpe#[iL-*XK&~KyV*,1Xz?=xWT1}N');

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix  = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
