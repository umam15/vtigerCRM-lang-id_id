<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
$languageStrings = array(
	'MailConverter' => 'Konverter Email',
	'MailConverter_Description' => 'Konversi email ke data yang sesuai',
	'MAILBOX' => 'Kotak Surat',
	'RULE' => 'Aturan',
	'LBL_ADD_RECORD' => 'Tambahkan Kotak Surat',
	'ALL' => 'Semua',
	'UNSEEN' => 'Belum Dibaca',
	'LBL_MARK_READ' => 'Tandai Sudah Dibaca',
	'SEEN' => 'Sudah Dibaca',
	'LBL_EDIT_MAILBOX' => 'Edit Kotak Surat',
	'LBL_CREATE_MAILBOX' => 'Buat Kotak Surat',
	'LBL_BACK_TO_MAILBOXES' => 'Kembali ke Kotak Surat',
	'LBL_MARK_MESSAGE_AS' => 'Tandai pesan sebagai',
	'LBL_CREATE_MAILBOX_NOW' => 'Buat Kotak Surat sekarang',
	'LBL_ADDING_NEW_MAILBOX' => 'Menambahkan Kotak Surat Baru',
	'MAILBOX_DETAILS' => 'Detail Kotak Surat',
	'SELECT_FOLDERS' => 'Pilih Folder',
	'ADD_RULES' => 'Tambah Aturan',
	'CREATE_Leads_SUBJECT' => 'Buat Prospek',
	'CREATE_Contacts_SUBJECT' => 'Buat Kontak',
	'CREATE_Accounts_SUBJECT' => 'Buat Organisasi',
	'LBL_ACTIONS' => 'Tindakan',
	'LBL_MAILBOX' => 'Kotak Surat',
	'LBL_RULE' => 'Aturan',
	'LBL_CONDITIONS' => 'Kondisi',
	'LBL_FOLDERS_SCANNED' => 'Folder Dipindai',
	'LBL_NEXT' => 'Berikutnya',
	'LBL_FINISH' => 'Selesai',
	'TO_CHANGE_THE_FOLDER_SELECTION_DESELECT_ANY_OF_THE_SELECTED_FOLDERS' => 'Untuk mengubah pilihan folder, hapus pilihan folder yang dipilih',
	'LBL_MAILCONVERTER_DESCRIPTION' => "Mail Converter memungkinkan Anda mengonfigurasi kotak surat untuk memindai email dan membuat entitas yang sesuai di Vtiger CRM.<br />Anda juga perlu menentukan aturan untuk menentukan tindakan apa yang harus dilakukan pada email Anda.<br />Email Anda dipindai secara otomatis, kecuali Anda telah menonaktifkan tugas Pemindai Surat di Penjadwal. <br /><br /><br />",
	
	//Server Messages
	'LBL_MAX_LIMIT_ONLY_TWO' => 'Anda hanya dapat mengonfigurasi dua kotak surat',
	'LBL_IS_IN_RUNNING_STATE' => 'Dalam status berjalan',
	'LBL_SAVED_SUCCESSFULLY' => 'Berhasil disimpan',
	'LBL_CONNECTION_TO_MAILBOX_FAILED' => 'Gagal terhubung ke kotak surat.',
	'LBL_DELETED_SUCCESSFULLY' => 'Berhasil dihapus',
	'LBL_RULE_DELETION_FAILED' => 'Penghapusan aturan gagal',
	'LBL_RULES_SEQUENCE_INFO_IS_EMPTY' => 'Info urutan aturan kosong',
	'LBL_SEQUENCE_UPDATED_SUCCESSFULLY' => 'Urutan berhasil diperbarui',
	'LBL_SCANNED_SUCCESSFULLY' => 'Berhasil dipindai',

	//Field Names
	'scannername' => 'Nama Pemindai',
	'server' => 'Nama Server IMAP',
	'protocol' => 'Protokol',
	'username' => 'Nama Pengguna',
	'password' => 'Kata Sandi',
	'ssltype' =>  'Jenis SSL',
	'sslmethod' => 'Metode SSL',
	'connecturl' => 'Url Sambungan',
	'searchfor' => 'Cari',
	'markas' => 'Setelah Pemindaian',
    'isvalid' => 'Status',
    'time_zone' => 'Zona Waktu Server Email',
    'scanfrom' => 'Pindai Email Dari',
    'YESTERDAY' => 'Kemarin',

	//Field values & Messages
	'LBL_ENABLE' => 'Aktifkan',
	'LBL_DISABLE' =>'Nonaktifkan',
	'LBL_STATUS_MESSAGE' => 'Centang untuk mengaktifkan',
	'LBL_VALIDATE_SSL_CERTIFICATE' => 'Validasi Sertifikat SSL',
	'LBL_DO_NOT_VALIDATE_SSL_CERTIFICATE' => 'Jangan Validasi Sertifikat SSL',
	'LBL_ALL_MESSAGES_FROM_LAST_SCAN' => 'Semua pesan dari pemindaian terakhir',
	'LBL_UNREAD_MESSAGES_FROM_LAST_SCAN' => 'Pesan yang belum dibaca dari pemindaian terakhir',
	'LBL_MARK_MESSAGES_AS_READ' => 'Tandai pesan sebagai telah dibaca',
	'LBL_I_DONT_KNOW' => "Saya tidak tahu",

	//Mailbox Actions
	'LBL_SCAN_NOW' => 'Pindai Sekarang',
	'LBL_RULES_LIST' => 'Daftar Aturan',
	'LBL_SELECT_FOLDERS' => 'Pilih Folder',

	//Action Messages
	'LBL_DELETED_SUCCESSFULLY' => 'Berhasil dihapus',
	'LBL_RULE_DELETION_FAILED' => 'Penghapusan aturan gagal',
	'LBL_SAVED_SUCCESSFULLY' => 'Berhasil disimpan',
	'LBL_SCANED_SUCCESSFULLY' => 'Berhasil dipindai',
	'LBL_IS_IN_RUNNING_STATE' => 'berjalan',
	'LBL_FOLDERS_INFO_IS_EMPTY' => 'Informasi folder kosong',
	'LBL_RULES_SEQUENCE_INFO_IS_EMPTY' => 'Informasi urutan aturan kosong',

	//Folder Actions
	'LBL_UPDATE_FOLDERS' => 'Perbarui Folder',

	//Rule Fields
	'fromaddress' => 'Dari',
	'toaddress' => 'Kepada',
	'subject' => 'Subjek',
	'body' => 'Isi',
	'matchusing' => 'Cocok',
	'action' => 'Aksi',

	//Rules List View labels
	'LBL_PRIORITY' => 'Prioritas',
	'PRIORITISE_MESSAGE' => 'Seret dan lepas blok untuk memprioritaskan aturan',
	'LBL_NOTE'=>'Catatan',
	'LBL_MAILCONVERTER_DISABLE_MESSAGE'=>'Mail Converter akan dihapus pada 31 Juli. Mailroom menyediakan cara yang lebih mudah untuk memindai email Anda. Untuk mengaktifkan Mailroom, silakan ',
	'LBL_CLICK_HERE'=>'klik di sini',

	//Rule Field values & Messages
	'LBL_ALL_CONDITIONS' => 'Semua Kondisi',
	'LBL_ANY_CONDITIOn' => 'Kondisi Apa Pun',

	//Rule Conditions
	'Contains' => 'Berisi',
	'Not Contains' => 'Tidak Berisi',
	'Equals' => 'Sama Dengan',
	'Not Equals' => 'Tidak Sama Dengan',
	'Begins With' => 'Awal',
	'Ends With' => 'Akhir',
	'Regex' => 'Ekspresi Reguler',
    'LBL_FROM_ADDRESS_PLACE_HOLDER' => 'Alamat email atau nama domain',

	//Rule Actions
	'CREATE_HelpDesk_FROM' => 'Buat Tiket (Dengan Kontak)',
    'CREATE_HelpDeskNoContact_FROM' => 'Buat Tiket (Tanpa Kontak)',
	'UPDATE_HelpDesk_SUBJECT' => 'Perbarui Tiket',
	'LINK_Contacts_FROM' => 'Tambahkan ke Kontak [FROM]',
	'LINK_Contacts_TO' => 'Tambahkan ke Kontak [TO]',
	'LINK_Accounts_FROM' => 'Tambahkan ke Organisasi [FROM]',
	'LINK_Accounts_TO' => 'Tambahkan ke Organisasi [KE]',
	'LINK_Leads_FROM' => 'Tambahkan ke Prospek [KE]',
	'LINK_Leads_TO' => 'Tambahkan ke Prospek [KE]',
    'CREATE_Potentials_SUBJECT' => 'Buat Peluang (Dengan Kontak)',
    'CREATE_PotentialsNoContact_SUBJECT' => 'Buat Peluang (Tanpa Kontak)',
    'LINK_Potentials_FROM' => 'Tambahkan ke Peluang [KE]',
    'LINK_Potentials_TO' => 'Tambahkan ke Peluang [KE]',
    'LINK_HelpDesk_FROM' => 'Tambahkan ke Tiket [KE]',
    'LINK_HelpDesk_TO' => 'Tambahkan ke Tiket [KE]',
    
    //Select Folder
    'LBL_UPDATE_FOLDERS' => 'Perbarui Folder',
    'LBL_UNSELECT_ALL' => 'Batalkan Pilihan Semua',
	
	//Setup Rules
	'LBL_CONVERT_EMAILS_TO_RESPECTIVE_RECORDS' => 'Konversi email ke rekaman masing-masing',
	'LBL_DRAG_AND_DROP_BLOCK_TO_PRIORITISE_THE_RULE' => 'Nomor aturan menunjukkan prioritas. Seret dan lepas untuk mengubah prioritas.',
	'LBL_ADD_RULE' => 'Tambah Aturan',
    'LBL_EDIT_RULE' => 'Edit Aturan',
	'LBL_PRIORITY' => 'Prioritas',
	'LBL_DELETE_RULE' => 'Hapus aturan',
	'LBL_BODY' => 'Isi',
	'LBL_MATCH' => 'Cocokkan',
	'LBL_ACTION' => 'Tindakan',
	'LBL_FROM' => 'Dari',
    'LBL_CONNECTION_ERROR' => 'Koneksi ke Kotak Surat gagal. Periksa koneksi jaringan dan coba lagi.',
    'LBL_RULE_CONDITIONS' => 'Kondisi Aturan',
    'LBL_RULE_ACTIONS' => 'Tindakan Aturan',
    // Body Rule
    'LBL_AUTOFILL_VALUES_FROM_EMAIL_BODY' => 'Isi otomatis nilai dari isi Email',
    'LBL_DELIMITER' => 'Pembatas',
    'LBL_COLON' => ': (Titik Dua)',
    'LBL_SEMICOLON' => '; (Titik Koma)',
    'LBL_DASH' => '- (Tanda Hubung)',
    'LBL_EQUAL' => '= (Sama dengan)',
    'LBL_GREATER_THAN' => '> (Lebih Besar Dari)',
    'LBL_COLON_DASH' => ':- (Titik Koma-Tanda Hubung)',
    'LBL_COLON_EQUAL' => ':= (Titik Koma-Sama dengan)',
    'LBL_SEMICOLON_DASH' => ';- (Titik Koma-Tanda Hubung)',
    'LBL_SEMICOLON_EQUAL' => ';= (Titik Koma-Sama dengan)',
    'LBL_EQUAL_GREATER_THAN' => '=> (Sama dengan-Lebih Besar Dari)',
    'LBL_OTHER' => 'Lainnya',
    'LBL_DELIMITER_INFO' => 'Pilih pemisah yang memisahkan nilai dari label di badan email Anda',
    'LBL_EMAIL_BODY_INFO' => 'Salin teks dari contoh email yang akan dipindai ke dalam kotak di bawah ini. Vtiger CRM akan mencoba menemukan nilai dan membantu Anda memetakannya ke kolom CRM.',
    'LBL_SAMPLE_BODY_TEXT' => 'Contoh Teks Isi',
    'LBL_FIND_FIELDS' => 'Klik di sini untuk menemukan nilai dari isi email',
    'LBL_BODY_FIELDS' => 'Nilai dari Email',
    'LBL_CRM_FIELDS' => 'Kolom CRM',
    'LBL_MAP_TO_CRM_FIELDS' => 'Petakan Nilai ke Kolom CRM',
    'SELECT_FIELD' => 'Pilih Kolom',
    'LBL_SAVE_MAPPING_INFO' => 'Menyimpan aturan isi untuk aturan Mail Converter yang ada akan menimpa aturan isi yang ada untuk aturan tersebut.',
    'LBL_MULTIPLE_FIELDS_MAPPED' => 'Tidak dapat memetakan satu kolom CRM dengan beberapa kolom',
    'LBL_BODY_RULE' => 'Aturan Isi Didefinisikan',
    
    'LBL_MAIL_SCANNER_INACTIVE' => 'Kotak Surat Ini Tidak Aktif',
    'LBL_NO_RULES' => 'Tidak ada aturan yang ditetapkan untuk Kotak Surat ini',
    
    'LBL_SCANNERNAME_ALPHANUMERIC_ERROR' => 'Nama Pemindai hanya menerima nilai alfanumerik. Karakter khusus tidak diperbolehkan.',
    'LBL_SERVER_NAME_ERROR' => 'Nama server tidak valid. Karakter khusus tidak diperbolehkan untuk nama server.',
    'LBL_USERNAME_ERROR' => 'Harap masukkan alamat email yang valid untuk nama pengguna.',
    'servertype' => 'Jenis Server',
    'LBL_DUPLICATE_USERNAME_ERROR' => 'Sudah ada Konverter Surat yang dikonfigurasi dengan alamat email ini. Anda tidak dapat membuat Konverter Surat duplikat dengan alamat email yang sama.',
    'LBL_DUPLICATE_SCANNERNAME_ERROR' => 'Sudah ada Konverter Surat yang dikonfigurasi dengan nama ini. Anda tidak dapat membuat Mail Converter dengan nama duplikat.',
       
);
$jsLanguageStrings = array(
	'JS_MAILBOX_DELETED_SUCCESSFULLY' => 'Kotak Surat Berhasil dihapus',
	'JS_MAILBOX_LOADED_SUCCESSFULLY' => 'Kotak Surat Berhasil dimuat',
    'JS_SELECT_ATLEAST_ONE' => 'Harap petakan setidaknya satu kolom',
    'JS_SERVER_NAME' => 'Masukkan nama server',
    'JS_TIMEZONE' => 'Zona Waktu Server Surat',
    'JS_SCAN_FROM' => 'Pindai Surat Dari',
    'JS_TIMEZONE_INFO' => 'Harap pilih zona waktu lokasi Server Surat Anda. Memilih zona waktu yang salah dapat melewatkan beberapa surat dari pemindaian.',
    'JS_SCAN_FROM_INFO' => 'Kolom ini menentukan apakah semua surat di Kotak Surat Anda akan dipindai atau surat yang masuk ke Kotak Surat Anda kemarin atau setelahnya yang akan dipindai. Kolom ini hanya berlaku untuk konfigurasi pertama kali atau saat Anda memilih folder baru untuk dipindai.',
    'JS_SELECT_ONE_FOLDER' => 'Anda harus memilih setidaknya satu folder.',
);	
