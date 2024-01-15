import Link from 'next/link';
interface 

const NavbarLink = ({href, label}) => {
    return (
        <Link href={href} className='py-2 px-3'>{label}</Link>
    );
}

export default NavbarLink;