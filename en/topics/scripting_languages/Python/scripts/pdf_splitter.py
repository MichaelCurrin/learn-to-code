#!/usr/bin/env python2
"""
Reads PDFs in the parent directory, creates directories based on their
names, splits the PDFs and exports the pages into directories based on the original filename.

@Author: Michael Currin

Required:
    - pip install pyPdf

Inspired by: 
    - http://stackoverflow.com/questions/490195/split-a-multi-page-pdf-file-into-multiple-pdf-files-with-python
    - http://stackoverflow.com/questions/273192/how-to-check-if-a-directory-exists-and-create-it-if-necessary/14364249#14364249
"""
import os

from pyPdf import PdfFileWriter, PdfFileReader

# List all the filenames in the parent directory and filter to PDFs only.
os.chdir('..')
files = os.listdir('.')
files = filter(lambda x: x.lower().endswith('.pdf'), files)

for f in files:
    print 'Processing {}'.format(f)

    # Remove file extension.
    folder = f[:-4] + '_pages'
    # Create directory for split output if it does not exist.
    try: 
        os.makedirs(folder)
    except OSError:
        if not os.path.isdir(folder):
            raise

    # Read in PDF.
    inputpdf = PdfFileReader(open(f, "rb"))

    # Export pages of PDF.
    for i in xrange(inputpdf.numPages):
        output = PdfFileWriter()
        output.addPage(inputpdf.getPage(i))
        outPath = os.path.join(folder, "{}.pdf".format(i+1))
        with open(outPath, "wb") as outputStream:
            output.write(outputStream)

    print '{} pages created'.format(inputpdf.numPages)
    print
