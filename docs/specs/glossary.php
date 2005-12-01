<?

$file_root = "../..";
// load libs
require($file_root."/include/"."incl.php");

// start of html
html_page_header("ScummVM :: SCUMM Reference Guide :: Glossary", '<link href="specs.css" rel="stylesheet" type="text/css">');

//display welcome table
echo html_content_begin("Glossary");
?>
  
<div class="par-item">
  <div class="par-head">
    Glossary
  </div>
  <div class="par-content">

<dl>
<DT>
archive<DD>A file containing one or more chunks

<dt>chunk
<DD>The basic component of a SCUMM data file. A chunk is a block of data that
starts with a chunk tag; a two or four byte indentifier of the type of data
stored in the chunk, and the length of the chunk.  The rest of the chunk can be
data of any type and may contain child chunks.

<DT>container chunk
<DD>A chunk that contains child chunks. Usually the child chunks follow a
header that may be zero or more bytes long, with no data between them.

<DT>leaf chunk
<DD>A chunk that does not contain any child chunks.

<DT>quad
<DD>A four-byte signed value. SCUMM uses both quad LEs (little endian) and quad
BEs (big endian).

<DT>resource
<DD>A chunk that is important to SCUMM in some way. (Resource and chunk are
mostly interchangeable. Chunk is used to refer to any RIFF file data block,
resource only refers to SCUMM data blocks.)

<DT>resource number
<DD>See <i><a href="#named resource">named resource</a></i>.

<DT>named resource
<DD>A resource that appears in the SCUMM file's index.  Named resources are
identified by a tuple of (class, number). The numbers are small integers
counting up from zero. 
Named resources are sometimes referred to as objects, but as
these can be easily confused with SCUMM objects it is not recommended.

<DT>string
<DD>Another name for an array.

<DT>word
<DD>A two-byte signed value. SCUMM uses both quad LEs (little endian) and quad
BEs (big endian).

</DL>

<HR><P STYLE="font-size: smaller; text-align: center">
All material &copy; 2000-2002 David Given, unless where stated otherwise.
</P>

  </div>
</div>

<?

// end of html
html_content_end();
html_page_footer();
?>
