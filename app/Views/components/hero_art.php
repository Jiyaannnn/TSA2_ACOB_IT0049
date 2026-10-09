<?php // These paper objects are decorative; the page heading carries the meaning. ?>
<div class="hero-composition hero-composition--<?= esc($kind, 'attr') ?>" aria-hidden="true">
    <div class="composition-grid"></div>
    <?php if ($kind === 'tasks'): ?>
        <div class="art-ticket art-ticket-back"><span>LEDGERLINE / DESK</span><strong>TODAY'S<br>WORK</strong><small>PRINT · PREPARE · SUPPLY</small></div>
        <div class="art-ticket art-checklist"><span>DAILY TASK SHEET <b>01</b></span><i><em></em><b></b></i><i><em></em><b></b></i><i><em></em><b></b></i><i><em></em><b></b></i><small>KEEP THE COUNTER MOVING</small></div>
        <div class="art-clip"></div><div class="art-dot art-dot-one"></div><div class="art-dot art-dot-two"></div>
    <?php elseif ($kind === 'profile'): ?>
        <div class="art-profile-paper"><span>CREATOR / PROJECT CARD</span><strong>Jian Edward<br>A. Acob</strong><small>BSITBA · TW32<br>WEB SYSTEM TECHNOLOGIES</small><div class="art-profile-rule"></div></div>
        <div class="art-color-card"><span>THE LEDGERLINE PALETTE</span><i></i><i></i><i></i><i></i></div>
        <div class="art-pencil"></div><div class="art-pin"></div>
    <?php elseif ($kind === 'about'): ?>
        <div class="art-zine art-zine-back"><span>PRINT / SUPPLY</span><strong>THE<br>GOOD<br>DETAILS.</strong><small>LEDGERLINE STUDIO NOTES</small></div>
        <div class="art-zine art-zine-front"><span>A SMALL SHOP WITH A CLEAR ROUTINE</span><div class="art-zine-circle"></div><strong>MAKE.<br>CHECK.<br>READY.</strong><small>THE WORK BEHIND EVERY ORDER</small></div>
        <div class="art-registration"><i></i><i></i><i></i><i></i></div>
    <?php else: ?>
        <div class="art-directory-card"><span>LEDGERLINE / DIRECTORY</span><strong>THE PEOPLE<br>BEHIND THE<br>COUNTER.</strong><small>KEEPING THE DETAILS TOGETHER</small></div>
        <div class="art-directory-slip"><span>SHOP RECORD</span><i></i><i></i><i></i><small>PRINT & SUPPLY</small></div>
        <div class="art-directory-clip"></div>
    <?php endif ?>
</div>
