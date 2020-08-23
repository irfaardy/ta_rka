-- Remove kode_rekening and uraian
ALTER TABLE `tb_perencanaan`
  DROP `kode_rekening`,
  DROP `uraian`;

-- Add kegiatan
ALTER TABLE `tb_perencanaan` ADD `kegiatan` VARCHAR(255) NULL AFTER `no_sarmut`;
