CREATE TABLE tb_categories (
	cat_id INT(11) NOT NULL AUTO_INCREMENT,
	cat_name VARCHAR(50) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(cat_id)
);

CREATE TABLE tb_order (
	order_id int(11) NOT NULL AUTO_INCREMENT,
	nama varchar(255) NOT NULL,
	telpon varchar(255) NOT NULL,
	jenisJasa varchar(255) NOT NULL,
	deskripsi varchar(255) NOT NULL,
	alamat varchar(255) NOT NULL,
	tanggal varchar(255) NOT NULL,
	PRIMARY KEY(order_id)
)

CREATE TABLE tb_posts (
	post_id INT(11) NOT NULL AUTO_INCREMENT,
	post_id_cat INT(11) NOT NULL,
	post_title VARCHAR(100) NOT NULL,
	post_text TEXT NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(post_id)
);

CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_full_name VARCHAR(100) DEFAULT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_email)
);

CREATE TABLE tb_pesanan (
    pesanan_id INT AUTO_INCREMENT PRIMARY KEY,
    bahan VARCHAR(255),
    warna VARCHAR(50),
    panjang DECIMAL(10, 2),
    lebar DECIMAL(10, 2),
    tinggi DECIMAL(10, 2),
    jumlah_pesanan INT,
    metode_pengiriman VARCHAR(100),
    keterangan TEXT,
    tanggal_pemesanan DATE
);

INSERT INTO
	tb_users
VALUES
	(
		1,
		'admin@gmail.com',
		'*4ACFE3202A5FF5CF467898FC58AAB1D615029441',
		'Administrator',
		'2023-11-03 03:40:43',
		NULL
	);