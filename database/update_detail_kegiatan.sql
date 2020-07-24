-- Update detail kegiatan
ALTER TABLE `tb_detail_kegiatan` CHANGE `jenis_peralatan` `kode_rekening` INT NULL DEFAULT NULL, CHANGE `banyak` `uraian` TEXT NULL DEFAULT NULL, CHANGE `d_anggaran` `qty` INT(5) NULL DEFAULT NULL, CHANGE `total_d_anggaran` `anggaran` FLOAT(30) NULL DEFAULT NULL;

-- tambah status kajur
ALTER TABLE `tb_detail_kegiatan` ADD `status_kajur` TINYINT NOT NULL AFTER `jurusan_id`;

-- drop qty & anggaran di tabel perencanaan
ALTER TABLE `tb_perencanaan`
  DROP `qty`,
  DROP `anggaran`;
