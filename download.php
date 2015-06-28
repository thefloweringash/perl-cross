<? include "_head.php" ?>

<p>Current version of perl-cross is 0.9.7. It's intended to be used with perl-5.20.2.
Download it here:</p>
<div class="dllink">
	<a href="https://raw.github.com/arsv/perl-cross/releases/perl-5.20.2-cross-0.9.7.tar.gz"
	 >https://raw.github.com/arsv/perl-cross/releases/perl-5.20.2-cross-0.9.7.tar.gz</a>
</div>

<p>To use, unpack over an appropriate perl distribution, overwriting the original Makefile.<br>
Use the exact perl version perl-cross was intended for, i.e. perl-5.20.0 for perl-5.20.0-cross-0.9.</p>

<p>For older releases, check <a href="https://github.com/arsv/perl-cross/tree/releases">GitHub releases
branch</a>.</p>

<h2>Changelog</h2>

<ul>
	<li>0.9.7 (2015-06-28)<ul>
		<li>MakeMaker library detection fixes</li>
		<li>better --no-dynaloader / --all-static options handling</li>
	</ul></li>

	<li>0.9.6 (2015-03-07)<ul>
		<li>a2p yacc invocation suppressed for 5.20.2 sources</li>
	</ul></li>

	<li>0.9.5 (2015-02-24)<ul>
		<li>perl 5.20.2</li>
		<li>--sysroot handling fixed</li>
	</ul></li>

	<li>0.9.4 (2014-11-04)<ul>
		<li>--all-static fix</li>
	</ul></li>

	<li>0.9.3 (2014-10-14)<ul>
		<li>perl 5.20.1</li>
		<li>bigendian target byteorder detection fix</li>
	</ul></li>

	<li>0.9.2 (2014-09-20)<ul>
		<li>minor updates to handle perl 5.20.1-RC1</li>
		<li>soname'd libperl installation</li>
	</ul></li>

	<li>0.9.1 (2014-08-26)<ul>
		<li>module cleanup for 5.20.0</li>
		<li>host-installed miniperl stuff removed</li>
	</ul></li>

	<li>0.9 (2014-08-01)<ul>
		<li>perl-5.20.0</li>
	</ul></li>

	<li>0.8.5 (2014-02-23)<ul>
		<li>out-of-source builds with absolute path to the source</li>
		<li>patch --follow-symlinks is not used anymore</li>
	</ul></li>

	<li>0.8.4 (2014-02-20)<ul>
		<li>variable/versioned libperl.so</li>
		<li>out-of-source building support</li>
		<li>default paths fixed (sitescript/vendorscript)</li>
		<li>some Makefile fixes</li>
		<li>project moved to GitHub</li>
	</ul></li>

	<li>0.8.3 (2013-10-19)<ul>
		<li>Testpack for on-target testing</li>
		<li>$extensions, ${static,dynamic,nonxs}_ext format changed to match Configure</li>
		<li>$sharepath default fixed</li>
	</ul></li>

	<li>0.8.2 (2013-09-09)<ul>
		<li>NV-related tests added</li>
		<li>C++ and ELF format test added</li>
		<li>largefile flags are now passed correctly to tests &amp; modules</li>
		<li>$ccdefines variable dropped in favor of $ccflags</li>
		<li>hint files handling changed</li>
		<li>config.sh variables list updated to match current Configure closely</li>
		<li>--with-*, --host-* options handling fixed</li>
	</ul></li>

	<li>0.8.1 (2013-09-05)<ul>
		<li>perl-5.18.1 (with no changes to perl-cross)</li>
		<li>test-related fixes</li>
	</ul></li>

	<li>0.8 (2013-08-08)<ul>
		<li>perl-5.18.0</li>
		<li>module stubs are provided for ExtUtils::* to make them usable with miniperl</li>
		<li>patch application is now done as a bulk phony target;
			patching the files in-place doen't translate well into make-dependencies</li>
		<li>module paths fixes</li>
		<li>Makefile dependencies cleaned up</li>
	</ul></li>

	<li>0.7.4 (2013-04-11)<ul>
		<li>shared libperl support; enable with -Duseshrplib</li>
		<li>nv_preserves_uv stuff reset to safe defaults; it can't be tested for currently, but at least it won't cause precision issues</li>
	</ul></li>

	<li>0.7.3 (2013-04-05)<ul>
		<li>libs/perllibs split, and libswanted handling fixes; NDBM is properly linked now</li>
		<li>standard format for extensions lists in $Config</li>
		<li>install paths adjusted to match mainline perl</li>
		<li>$libpth default value added, DynaLoader::dl_findfile should work now</li>
		<li>drop-in replacement for Digest::MD5, calling Digest::Perl::MD5; no need to alter existing scripts anymore</li>
		<li>patched Liblist now warns about non-usable libraries (and passes relevant tests)</li>
		<li>minor config.sh tweaks</li>
	</ul></li>

	<li>0.7.2 (2013-03-25)<ul>
		<li>perl-5.16.3</li>
		<li>preliminary "make test" support (native builds only for now)</li>
		<li>specifying --mode manually should work as expected in most cases</li>
		<li>various configure/Makefile fixes</li>
	</ul></li>

	<li>0.7.1 (2012-12-15)<ul>
		<li>use gcc for dynalinking modules</li>
	</ul></li>

	<li>0.7 (2012-07-06)<ul>
		<li>perl-5.16.0</li>
		<li>original perl files are now patched (vs. supplying modified versions)</li>
		<li>Digest::Perl::MD5 added to allow using install{perl,man} with miniperl</li>
		<li>Module name handling fixed in make_ext_Makefile.pl</li>
		<li>archlib is now $prefix/lib/perl/$archname, instead of just $prefix/lib/perl/arch</li>
		<li>d_csh set to undef, to prevent glob() failures</li>
		<li>useithreads and use5005threads handling added</li>
	</ul></li>

	<li>0.6.5 (2012-02-16)<ul>
		<li>inttypes.h added in byte order test</li>
	</ul></li>

	<li>0.6.4 (2011-12-05)<ul>
		<li>/bin/sh changed to /bin/bash, take 2</li>
	</ul></li>

	<li>0.6.3 (2011-11-02)<ul>
		<li>perl-5.14.2 (without any actual changes to perl-cross)</li>
		<li>/bin/sh changed to /bin/bash everywhere</li>
	</ul></li>
		
	<li>0.6.2 (2011-09-03)<ul>
		<li>Android and Intel CC builds support</li>
		<li>--sysroot is now passed to compiler/linker</li>
		<li>target specifications not recognized by config.sub are allowed</li>
		<li>several configure tests fixes</li>
		<li>no-DynaLoader configuration support</li>
	</ul></li>

	<li>0.6.1 (2011-08-24)<ul>
		<li>static modules handling fixed</li>
		<li>--all-static option for configure</li>
	</ul></li>

	<li>0.6 (2011-08-20)<ul>
		<li>perl-5.14 support</li>
		<li>make rules to build disabled modules</li>
		<li>hints switched to flat directory style, added compiler and mode hints</li>
		<li>libswanted handling fixed</li>
		<li>configure now reads patchlevel.h to get perl version</li>
		<li>minor fixes &amp; cleanup</li>
	</ul></li>

	<li>0.5 (2011-07-23)<ul>
		<li>need_va_copy bug fixed (this is what caused build errors on x86_64)</li>
		<li>configure can now load configuration from a file (-f, -O)</li>
		<li>support for most of the original Configure options (inc. -D, -U, -A)</li>
		<li>--set/-D now allow passing arbitrary variables to config.sh</li>
		<li>make rules to track MakeMaker dependencies</li>
		<li>ccflags/ldflags support fixed</li>
		<li>-DEBUGGING support added</li>
		<li>environment clean-up added, configure no longer stumbles upon stray environment variables</li>
		<li>Time::HiRes specific hints to allow successful builds</li>
		<li>removed module tests for miniperl</li>
	</ul></li>

	<li>0.4.1 (2011-04-25)<ul>
		<li>make rules for xsubpp changed</li>
		<li>fixed static modules handling</li>
	</ul></li>

	<li>0.4 (2011-03-11)<ul>
		<li>perl-5.12 support</li>
		<li>miniperl_top introduced</li>
		<li>make rules for all modules, make_ext is no longer used</li>
	</ul></li>

	<li>0.3 (2011-03-04)<ul>
		<li>threads support</li>
		<li>various fixes done after the demise of the old site</li>
	</ul></li>
		
	<li>0.2 (2009-12-06)<ul>
		<li>make rules for DynaLoader fixed</li>
		<li>other minor fixes to allow MIPS build</li>
	</ul></li>

	<li>0.1 (2009-01-05)<ul>
		<li>first public release</li>
	</ul></li>
</ul>

<? include "_foot.php" ?>
