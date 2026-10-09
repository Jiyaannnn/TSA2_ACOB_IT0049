<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="inner-hero"><div class="inner-hero-copy"><p class="eyebrow"><span class="eyebrow-dot"></span> THE PERSON BEHIND LEDGERLINE</p><h1>Meet the <em>creator.</em></h1><p>A student project shaped around a practical print and supply shop.</p></div><?= view('components/hero_art', ['kind' => 'profile']) ?></section>
<section class="profile-layout"><div class="profile-feature"><span class="profile-avatar" aria-hidden="true">JA</span><p class="eyebrow">Student developer</p><h2>Jian Edward A. Acob</h2><p>I designed and developed this CodeIgniter project for Web System Technologies.</p></div><dl class="profile-details"><div><dt>Program and section</dt><dd>BSITBA · TW32</dd></div><div><dt>Course</dt><dd>IT0049 · Web System Technologies</dd></div><div><dt>Project</dt><dd>Ledgerline Print & Supply</dd></div></dl></section>
<?= $this->endSection() ?>
